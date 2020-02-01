<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;
use Carbon\Carbon;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // modify this to your own needs
        SitemapGenerator::create('https://sarjanamalam.com')
            ->getSitemap()
            ->add(Url::create('/tentang-sarjana-malam'))
            ->add(Url::create('/privacy'))
            ->add(Url::create('/how-search-works'))
            ->add(Url::create('/frequently-asked-question'))
            ->add(Url::create('/blog'))
            ->add(Url::create('/event'))
            ->add(Url::create('/karir-sarjanamalam'))
            ->add(Url::create('/partnership'))
            ->add(Url::create('/hubungi-sarjanamalam'))
            ->add(Url::create('/cerita-sarjanamalam'))
            ->add(Url::create('/kirim-pesan'))
            ->add(Url::create('/request-ad-event'))
            ->add(Url::create('/search'))
            ->add(Url::create('/signin'))
            ->writeToFile(public_path('sitemap.xml'));
    }
}
