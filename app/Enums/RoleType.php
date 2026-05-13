<?php

namespace App\Enums;

use App\Enums\Contracts\HasLabel;
use App\Enums\Contracts\HasDescription;

enum RoleType: string implements HasLabel, HasDescription
{
    case ADMIN = 'admin';
    case GUEST = 'guest';

    /**
     * Get the enum values as an array.
     *
     * @return array<string, string>
     */
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    /**
     * Get the label for the enum value.
     *
     * @return string
     */
    public function label(): string
    {
        return match ($this) {
            self::ADMIN => 'Administrator',
            self::GUEST => 'Guest',
        };
    }

    /**
     * Get the description for the enum value.
     *
     * @return string
     */
    public function description(): string
    {
        return match ($this) {
            self::ADMIN => 'Full access to all features and resources.',
            self::GUEST => 'Limited access to a limited set of features and resources.',
        };
    }
}
