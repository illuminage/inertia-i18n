<?php

namespace Svidware\InertiaI18n;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Svidware\InertiaI18n\Commands\GenerateTranslationsCommand;

class InertiaI18nServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('inertia-i18n')
            ->hasConfigFile()
            ->hasInstallCommand(function ($command) {
                $command->publishConfigFile();
            })
            ->hasCommand(GenerateTranslationsCommand::class);
    }
}
