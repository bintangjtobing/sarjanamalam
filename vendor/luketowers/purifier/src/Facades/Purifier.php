<?php

namespace LukeTowers\Purifier\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LukeTowers\Purifier
 */
class Purifier extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'purifier';
    }
}
