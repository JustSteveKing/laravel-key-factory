<?php

declare(strict_types=1);

namespace JustSteveKing\KeyFactory;

use Illuminate\Support\Str;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class KeyFactoryServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-key-factory')
            ->hasConfigFile();
    }

    public function boot(): void
    {
        parent::boot();

        Str::macro(
            name: 'key',
            macro: fn (string $prefix, int | null $length = null) => KeyFactory::generate(
                prefix: $prefix,
                length: $length,
            ),
        );
    }
}
