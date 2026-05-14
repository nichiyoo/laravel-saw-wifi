<?php

namespace App\Enums;

use App\Enums\Contracts\HasLabel;
use App\Enums\Contracts\HasDescription;

enum VariableType: string implements HasLabel, HasDescription
{
    case JSS_USERS = 'jss_users';
    case WIFI_COUNT = 'wifi_count';
    case POPULATION_DENSITY = 'population_density';
    case SELF_FUNDING = 'self_funding';

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
            self::JSS_USERS => 'JSS Users',
            self::WIFI_COUNT => 'WiFi Count',
            self::POPULATION_DENSITY => 'Population Density',
            self::SELF_FUNDING => 'Self Funding',
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
            self::JSS_USERS => 'Number of active JSS Wi-Fi users in the kemantren',
            self::WIFI_COUNT => 'Number of existing JSS Wi-Fi access points',
            self::POPULATION_DENSITY => 'Population density in jiwa per km²',
            self::SELF_FUNDING => 'Community self-funding (swadaya) collected',
        };
    }
}
