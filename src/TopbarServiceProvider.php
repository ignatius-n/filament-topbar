<?php

namespace JeffersonGoncalves\Filament\Topbar;

use JeffersonGoncalves\Filament\Topbar\Livewire\Topbar;
use Livewire\Livewire;
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

    public function packageRegistered(): void
    {
        if (!app()->runningInConsole()) {
            class_alias(Topbar::class, \Filament\Livewire\Topbar::class);
        }
    }

    public function packageBooted(): void
    {
        Livewire::component('filament-topbar', Topbar::class);
    }
}
