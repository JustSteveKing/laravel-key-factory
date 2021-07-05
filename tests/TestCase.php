<?php

namespace JustSteveKing\KeyFactory\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use JustSteveKing\KeyFactory\KeyFactoryServiceProvider;

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
