<?php

namespace Cybernerdie\DiskMonitorEntries;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Cybernerdie\DiskMonitorEntries\Commands\DiskMonitorEntriesCommand;

class DiskMonitorEntriesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('disk-monitor-entries')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_disk-monitor-entries_table')
            ->hasCommand(DiskMonitorEntriesCommand::class);
    }
}
