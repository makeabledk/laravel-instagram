<?php

namespace Makeable\Instagram;

use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;
use Makeable\Instagram\InstagramClient;

class InstagramServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(InstagramClient::class, function () {

            var_dump('Connect Guzzle');

            /*return tap(new Google_Client, function ($client) {
                $client->setApplicationName(config('app.name'));
                $client->setAuthConfig(config('services.google.credentials_file'));
            });*/
            // return guzzle client
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [InstagramClient::class];
    }
}
