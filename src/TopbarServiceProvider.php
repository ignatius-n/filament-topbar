<?php

namespace JeffersonGoncalves\Filament\Topbar;

use Illuminate\Support\Facades\Blade;
use JeffersonGoncalves\Filament\Topbar\Components\Topbar;
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

    public function packageBooted(): void
    {
        Blade::component('filament-panels::topbar', Topbar::class);
    }
}
