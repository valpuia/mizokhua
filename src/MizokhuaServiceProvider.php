<?php

namespace Valpuia\Mizokhua;

use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class MizokhuaServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('mizokhua')
            ->hasMigrations($this->getMigrations())
            ->hasCommand(Commands\MizokhuaSeederCommand::class)
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->publishMigrations()
                    ->askToRunMigrations()
                    ->askToStarRepoOnGitHub('valpuia/mizokhua');
            });
    }

    /**
     * @return array<string>
     */
    protected function getMigrations(): array
    {
        return [
            'create_districts_table',
            'create_villages_table',
        ];
    }
}
