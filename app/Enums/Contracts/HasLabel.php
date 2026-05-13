<?php

namespace App\Enums\Contracts;

interface HasLabel
{
    /**
     * Get the label for the enum value.
     *
     * @return string
     */
    public function label(): string;
}
