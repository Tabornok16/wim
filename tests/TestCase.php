<?php

namespace Wim\LaravelPackage\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Wim\LaravelPackage\LaravelPackageServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            LaravelPackageServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        // Perform any environment setup
    }
} 