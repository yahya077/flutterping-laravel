<?php

namespace Flutterping\FlutterpingLaravel;

use Flutterping\FlutterpingLaravel\Commands\FlutterpingLaravelCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FlutterpingLaravelServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('flutterping-laravel')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_flutterping-laravel_table')
            ->hasCommand(FlutterpingLaravelCommand::class);
    }
}
