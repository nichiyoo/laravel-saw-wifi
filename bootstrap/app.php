<?php

use App\Http\Middleware\RoleCheck;
use Illuminate\Foundation\Application;
use App\Http\Middleware\EnvirontmentCheck;
use CodeZero\LocalizedRoutes\Middleware\SetLocale;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Routing\Middleware\SubstituteBindings;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withProviders([
        \Repo\SawEngine\SawServiceProvider::class,
    ])
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
            'role' => RoleCheck::class,
            'env' => EnvirontmentCheck::class,
        ]);

        $middleware->web(remove: [
            SubstituteBindings::class,
        ]);

        $middleware->web(append: [
            SetLocale::class,
            SubstituteBindings::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
