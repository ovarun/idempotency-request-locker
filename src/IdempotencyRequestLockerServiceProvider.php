<?php

namespace Ovarun\IdempotencyRequestLocker;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Ovarun\IdempotencyRequestLocker\Commands\IdempotencyRequestLockerCommand;

class IdempotencyRequestLockerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('idempotency-request-locker')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_idempotency_request_locker_table')
            ->hasCommand(IdempotencyRequestLockerCommand::class);
    }
}
