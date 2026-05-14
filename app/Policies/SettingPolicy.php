<?php

namespace App\Policies;

use App\Models\User;
use App\Enums\RoleType;

class SettingPolicy
{
    /**
     * Determine whether the user can view settings.
     */
    public function viewAny(User $user): bool
    {
        return $user->role === RoleType::ADMIN;
    }

    /**
     * Determine whether the user can update settings.
     */
    public function create(User $user): bool
    {
        return $user->role === RoleType::ADMIN;
    }
}
