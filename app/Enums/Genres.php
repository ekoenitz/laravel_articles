<?php

namespace App\Enums;

enum Genres: string
{
    case NEWS = 'news';
    case SPORTS = 'sports';
    case CULTURE = 'culture';

    // A utility method to get the enum values for Blade views
    public static function values(): array
    {
        return array_column(self::cases(), 'name', 'value');
    }
}