<?php

namespace Makeable\Instagram\Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Makeable\Instagram\InstagramServiceProvider;


class TestCase extends BaseTestCase
{
    public function setUp()
    {
        parent::setUp();
    }

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        putenv('APP_ENV=testing');
        putenv('APP_DEBUG=true');
        putenv('DB_CONNECTION=sqlite');
        putenv('DB_DATABASE=:memory:');

        $app = require __DIR__.'/../vendor/laravel/laravel/bootstrap/app.php';

        $app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();
        $app->register(InstagramServiceProvider::class);


        // Register config

        return $app;
    }
}
