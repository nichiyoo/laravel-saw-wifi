<?php

namespace Database\Seeders;

use App\Models\User;
use App\Enums\RoleType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Administrator',
            'email' => 'admin@example.com',
            'role' => RoleType::ADMIN,
        ]);

        User::factory()->create([
            'name' => 'Guest',
            'email' => 'guest@example.com',
            'role' => RoleType::GUEST,
        ]);
    }
}
