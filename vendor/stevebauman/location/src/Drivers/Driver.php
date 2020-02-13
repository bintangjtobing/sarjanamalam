<?php

namespace Stevebauman\Location\Drivers;

use Illuminate\Support\Fluent;
use Stevebauman\Location\Position;

abstract class Driver
{
    /**
     * The fallback driver.
     *
     * @var Driver
     */
    protected $fallback;

    /**
     * Append a fallback driver to the end of the chain.
     *
     * @param Driver $handler
     */
    public function fallback(Driver $handler)
    {
        if (is_null($this->fallback)) {
            $this->fallback = $handler;
        } else {
            $this->fallback->fallback($handler);
        }
    }

    /**
     * Handle the driver request.
     *
     * @param string $ip
     *
     * @return Position|bool
     */
    public function get($ip)
    {
        $data = $this->process($ip);

        $position = new Position();

        // Here we will ensure the locations data we received isn't empty.
        // Some IP location providers will return empty JSON. We want
        // to avoid this so we can go to a fallback driver.
        if ($data instanceof Fluent && $this->fluentDataIsNotEmpty($data)) {
            $position = $this->hydrate($position, $data);

            $position->ip = $ip;
            $position->driver = get_class($this);
        }

        if (! $position->isEmpty()) {
            return $position;
        }

        return $this->fallback ? $this->fallback->get($ip) : false;
    }

    /**
     * Determine if the given fluent data is not empty.
     *
     * @param Fluent $data
     *
     * @return bool
     */
    protected function fluentDataIsNotEmpty(Fluent $data)
    {
        return count(array_filter($data->getAttributes())) > 0;
    }

    /**
     * Retrieves content from the given URL using cURL.
     *
     * @param string $url
     *
     * @return mixed
     */
    protected function getUrlContent($url)
    {
        $session = curl_init();

        curl_setopt($session, CURLOPT_URL, $url);
        curl_setopt($session, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($session, CURLOPT_CONNECTTIMEOUT, 5);

        $content = curl_exec($session);

        curl_close($session);

        return $content;
    }

    /**
     * Returns the URL to use for querying the current driver.
     *
     * @param string $ip
     *
     * @return string
     */
    abstract protected function url($ip);

    /**
     * Hydrates the Position object with the given location data.
     *
     * @param Position $position
     * @param Fluent   $location
     *
     * @return \Stevebauman\Location\Position
     */
    abstract protected function hydrate(Position $position, Fluent $location);

    /**
     * Process the specified driver.
     *
     * @param string $ip
     *
     * @return Fluent|bool
     */
    abstract protected function process($ip);
}
