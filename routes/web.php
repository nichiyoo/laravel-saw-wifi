<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\MetricController;
use App\Http\Controllers\DashboardController;

Route::middleware('auth')
    ->group(function () {
        Route::get('/', fn() => redirect()->route('dashboard'));

        Route::prefix('dashboard')
            ->controller(DashboardController::class)
            ->group(function () {
                Route::get('/', 'index')->name('dashboard');
                Route::get('/help', 'help')->name('dashboard.help');
                Route::get('/settings', 'settings')->name('dashboard.settings');
            });

        Route::prefix('profile')
            ->as('profile.')
            ->group(function () {
                Route::get('/', [ProfileController::class, 'show'])->name('show');
                Route::get('/edit', [ProfileController::class, 'edit'])->name('edit');
                Route::patch('/', [ProfileController::class, 'update'])->name('update');
                Route::delete('/', [ProfileController::class, 'destroy'])->name('destroy');
            });

        Route::resource('candidates', CandidateController::class)->only('index');
        Route::middleware('role:admin')->resource('candidates', CandidateController::class)->except('index');

        Route::resource('metrics', MetricController::class)->only('index');
        Route::middleware('role:admin')->resource('metrics', MetricController::class)->except('index');
    });



require __DIR__ . '/auth.php';
require __DIR__ . '/development.php';
