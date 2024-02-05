<?php

namespace App\Enums;

enum SupportedLanguageCodes: string
{
    case ENGLISH = 'en';
    case JAPANESE = 'ja';

    // A utility method to get the enum values for Blade views
    public static function values(): array
    {
        return array_column(self::cases(), 'name', 'value');
    }

    public static function is_supported($lang_string) {
        return in_array($lang_string, array_column(self::cases(), 'value'));           
    }
}