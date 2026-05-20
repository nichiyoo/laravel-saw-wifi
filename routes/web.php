<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DssController;
use App\Http\Controllers\MetricController;
use App\Http\Controllers\HelperController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\DashboardController;

Route::localized(function () {
    Route::controller(HelperController::class)
        ->group(function () {
            Route::get('/', 'root')->name('root');
            Route::get('/test', 'test')->name('test');
        });

    Route::middleware('auth')
        ->group(function () {
            Route::prefix('dashboard')
                ->controller(DashboardController::class)
                ->group(function () {
                    Route::get('/', 'index')->name('dashboard');
                    Route::get('/help', 'help')->name('dashboard.help');
                    Route::get('/about', 'about')->name('dashboard.about');
                    Route::get('/dataset', 'dataset')->name('dashboard.dataset');
                    Route::get('/journal', 'journal')->name('dashboard.journal');
                });

            Route::middleware('role:admin')
                ->prefix('settings')
                ->as('settings.')
                ->controller(SettingController::class)
                ->group(function () {
                    Route::get('/', 'index')->name('index');
                    Route::post('/', 'store')->name('store');
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

            Route::prefix('calculate')
                ->name('calculate.')
                ->controller(DssController::class)
                ->group(function () {
                    Route::get('/', 'index')->name('index');
                });
        });


    require __DIR__ . '/auth.php';
    require __DIR__ . '/development.php';
});
