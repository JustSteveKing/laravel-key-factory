<?php

namespace JustSteveKing\KeyFactory\Tests;

use JustSteveKing\KeyFactory\KeyFactoryServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            KeyFactoryServiceProvider::class,
        ];
    }
}
