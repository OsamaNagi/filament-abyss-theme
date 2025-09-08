<?php

namespace Nagi\FilamentAbyssTheme;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Colors\Color;
use Filament\Support\Facades\FilamentColor;

class FilamentAbyssThemePlugin implements Plugin
{
    public static function make(): static
    {
        return new static;
    }

    public function getId(): string
    {
        return 'filament-abyss-theme';
    }

    public function register(Panel $panel): void
    {
        FilamentColor::register([
            'gray' => [
                50 => '#f9fafb',
                100 => '#f9fafb',
                200 => '#E0E0E0',
                300 => '#C0C0C0',
                400 => '#989FB1',
                500 => '#637777',
                600 => '#3C5A64',
                700 => '#1A3F4C',
                800 => '#123743',
                900 => '#001e29',
                950 => '#081B20',
            ],
        ]);

        $panel
            ->colors([
                'danger' => Color::hex('#ff2056'),
                'info' => Color::hex('#76B7D8'),
                'primary' => [
                    50 => '#E7FAF9',
                    100 => '#D1F3F1',
                    200 => '#A3E7E3',
                    300 => '#75DAD5',
                    400 => '#45ACAB',
                    500 => '#2F8F8E',
                    600 => '#257776',
                    700 => '#1C5F5E',
                    800 => '#134847',
                    900 => '#0D3433',
                    950 => '#092424',
                ],
                'secondary' => Color::hex('#fed7a7'),
                'success' => Color::hex('#45ACAB'),
                'warning' => Color::hex('#fed7a7'),
            ])
            ->viteTheme('vendor/osamanagi/filament-abyss-theme/resources/css/theme.css');
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
