<?php

namespace App\Enums;

use App\Enums\Contracts\HasIcon;
use App\Enums\Contracts\HasLabel;

enum Language: string implements HasLabel, HasIcon
{
    case ENGLISH = 'en';
    case JAPANESE = 'ja';
    case INDONESIA = 'id';
    case JAVANESE = 'jv';
    case SUNDANESE = 'su';

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
     * Get the human-readable label for the language.
     *
     * @return string
     */
    public function label(): string
    {
        return match ($this) {
            self::ENGLISH => 'English',
            self::JAPANESE => '日本語',
            self::INDONESIA => 'Bahasa Indonesia',
            self::JAVANESE => 'Bahasa Jawa',
            self::SUNDANESE => 'Basa Sunda',
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
            self::JAPANESE => 'fi fi-jp',
            self::INDONESIA => 'fi fi-id',
            self::JAVANESE => 'fi fi-id',
            self::SUNDANESE => 'fi fi-id',
        };
    }
}
