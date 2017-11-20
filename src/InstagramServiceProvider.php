<?php

namespace Makeable\LaravelInstagram;

use Illuminate\Support\ServiceProvider;
use League\OAuth2\Client\Provider\Instagram;

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
            return new Instagram(config('services.instagram'));
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
