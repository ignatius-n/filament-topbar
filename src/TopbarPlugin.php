<?php

namespace JeffersonGoncalves\Filament\Topbar;

use Filament\Contracts\Plugin;
use Filament\Panel;
use JeffersonGoncalves\Filament\Topbar\Livewire\Topbar;

class TopbarPlugin implements Plugin
{
    public static function make(): static
    {
        return app(static::class);
    }

    public function getId(): string
    {
        return 'topbar';
    }

    public function register(Panel $panel): void
    {
        $panel->topNavigation();
        class_alias(Topbar::class, \Filament\Livewire\Topbar::class);
    }

    public function boot(Panel $panel): void
    {

    }
}
