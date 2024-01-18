<?php

namespace App\Enums;

enum ArticleFilterTypes: string
{
    case AUTHOR = 'author';
    case DATE = 'creation_date';
    case GENRE = 'genre';

    // A utility method to get the enum values for Blade views
    public static function values(): array
    {
        return array_column(self::cases(), 'name', 'value');
    }
}