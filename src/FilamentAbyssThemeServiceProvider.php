<?php

namespace Nagi\FilamentAbyssTheme;

use Illuminate\Support\ServiceProvider;

class FilamentAbyssThemeServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/filament-abyss-theme.php', 'filament-abyss-theme');

        $this->publishes([
            __DIR__ . '/../config/filament-abyss-theme.php' => config_path('filament-abyss-theme.php'),
        ], 'filament-abyss-theme-config');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/filament-abyss-theme'),
        ], 'filament-abyss-theme-views');
    }

    public function boot(): void
    {
        //
    }
}
