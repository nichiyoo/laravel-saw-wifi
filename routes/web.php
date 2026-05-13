<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;

Route::middleware('auth')
    ->controller(DashboardController::class)
    ->group(function () {
        Route::get('/', 'index')->name('dashboard');
    });

Route::middleware('auth')
    ->prefix('config')
    ->as('config.')
    ->controller(DashboardController::class)
    ->group(function () {
        Route::get('/help', 'help')->name('help');
        Route::get('/settings', 'settings')->name('settings');
    });

Route::middleware('auth')
    ->prefix('profile')
    ->as('profile.')
    ->group(function () {
        Route::get('/', [ProfileController::class, 'show'])->name('show');
        Route::get('/edit', [ProfileController::class, 'edit'])->name('edit');
        Route::patch('/', [ProfileController::class, 'update'])->name('update');
        Route::delete('/', [ProfileController::class, 'destroy'])->name('destroy');
    });

require __DIR__ . '/auth.php';
require __DIR__ . '/development.php';
