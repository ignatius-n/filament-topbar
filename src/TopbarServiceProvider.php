<?php

namespace JeffersonGoncalves\Filament\Topbar;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class TopbarServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-topbar')
            ->hasViews();
    }
}
