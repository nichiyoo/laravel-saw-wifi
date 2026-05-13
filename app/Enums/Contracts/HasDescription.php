<?php

namespace App\Enums\Contracts;

interface HasDescription
{
    /**
     * Get the description for the enum value.
     *
     * @return string
     */
    public function description(): string;
}
