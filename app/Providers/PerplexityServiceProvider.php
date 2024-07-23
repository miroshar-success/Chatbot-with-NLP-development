<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use SoftCreatR\PerplexityAI\PerplexityAI;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\HttpFactory;

class PerplexityServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(PerplexityAI::class, function ($app) {
            $httpClient = new Client();
            $httpFactory = new HttpFactory();

            return new PerplexityAI(
                $httpFactory,
                $httpFactory,
                $httpFactory,
                $httpClient,
                config('perplexity.api_key')
            );
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
