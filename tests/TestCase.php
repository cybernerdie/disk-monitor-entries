<?php

namespace Cybernerdie\DiskMonitorEntries\Tests;

use Cybernerdie\DiskMonitorEntries\DiskMonitorEntriesServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Cybernerdie\\DiskMonitorEntries\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            DiskMonitorEntriesServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_disk-monitor-entries_table.php.stub';
        $migration->up();
        */
    }
}
