<?php

namespace Wim\LaravelPackage;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;

class LaravelPackageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // Register package services here
        $this->mergeConfigFrom(
            __DIR__.'/../config/laravel-package.php', 'laravel-package'
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Bootstrap package services here
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/laravel-package.php' => base_path('config/laravel-package.php'),
            ], 'config');
        }
    }
} 