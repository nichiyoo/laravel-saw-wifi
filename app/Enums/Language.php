<?php

namespace App\Enums;

use App\Enums\Contracts\HasIcon;

enum Language: string implements HasIcon
{
    case ENGLISH = 'en';
    case INDONESIA = 'id';

    /**
     * Get all enum values as an array.
     *
     * @return array<int, string>
     */
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    /**
     * Get the patterns for the language.
     *
     * @return string
     */
    public static function patterns(): string
    {
        $languages = self::values();
        return implode('|', $languages);
    }

    /**
     * Get the human-readable label for the language.
     *
     * @return string
     */
    public function label(): string
    {
        return match ($this) {
            self::ENGLISH => 'English',
            self::INDONESIA => 'Indonesia',
        };
    }

    /**
     * Get the flag-icons CSS class for the language.
     *
     * @return string
     */
    public function icon(): string
    {
        return match ($this) {
            self::ENGLISH => 'fi fi-gb',
            self::INDONESIA => 'fi fi-id',
        };
    }
}
