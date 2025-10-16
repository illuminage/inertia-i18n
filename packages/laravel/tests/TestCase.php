<?php

namespace Svidware\InertiaI18n\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Svidware\InertiaI18n\InertiaI18nServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            InertiaI18nServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        // No database setup needed
    }
}
