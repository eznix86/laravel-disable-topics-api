<?php

namespace Spatie\DisableFloc\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Spatie\DisableFloc\DisableTopicsApiServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            DisableTopicsApiServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('app.key', 'base64:m+pDa0MKS1KpMlxzzdVEaqFHysv3IPhrx/3TFSWBqJA=');
    }
}
