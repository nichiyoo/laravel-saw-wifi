<?php

namespace App\Enums\Contracts;

interface HasIcon
{
    /**
     * Get the flag-icons CSS class for the enum value.
     *
     * @return string
     */
    public function icon(): string;
}
