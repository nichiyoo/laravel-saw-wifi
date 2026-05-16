<?php

use App\Models\User;
use App\Enums\RoleType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::middleware(['auth', 'env:local'])
    ->as('development.')
    ->prefix('development')
    ->group(function () {
        Route::get('migrate', function () {
            $user = Auth::user();
            Artisan::call('migrate:fresh', ['--seed' => true]);

            $user = User::query()->first();
            Auth::loginUsingId($user->id);

            return back()->with('success', trans('messages.db_migrated'));
        })->name('migrate');

        Route::get('reset', function () {
            $user = Auth::user();
            Artisan::call('migrate:fresh');
            Artisan::call('db:seed', ['--class' => 'UserSeeder']);

            $user = User::query()->first();
            Auth::loginUsingId($user->id);

            return back()->with('success', trans('messages.db_reset'));
        })->name('reset');

        Route::get('impersonate', function (Request $request) {
            $admin = User::query()->where('role', RoleType::ADMIN)->first();
            $guest = User::query()->where('role', RoleType::GUEST)->first();
            $role = $request->input('role');

            match ($role) {
                RoleType::ADMIN->value => Auth::login($admin),
                RoleType::GUEST->value => Auth::login($guest),
            };

            return back()->with('success', trans('messages.impersonated', [
                'role' => $role
            ]));
        })->name('impersonate');
    });
