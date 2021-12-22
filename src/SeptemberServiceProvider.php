<?php

namespace KaanTanis\September;

use Illuminate\Support\ServiceProvider;

class SeptemberServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('september', function ($app) {
            return new September();
        });
    }

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '../database/migrations');
    }
}
