<?php

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        // With this setup, you can use the Logger anywhere in your Laravel application, and it will always be the same instance
        $this->app->singleton('Logger', function ($app) {
            return Logger::getInstance();
        });
    }
}