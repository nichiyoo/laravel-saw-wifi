<?php

namespace App\Enums;

use App\Enums\Contracts\HasLabel;
use App\Enums\Contracts\HasDescription;

enum MetricType: string implements HasLabel, HasDescription
{
    case COST = 'cost';
    case BENEFIT = 'benefit';

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
            self::COST => 'Cost',
            self::BENEFIT => 'Benefit',
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
            self::COST => 'Criteria where lower values increase the final score',
            self::BENEFIT => 'Criteria where higher values increase the final score',
        };
    }
}
