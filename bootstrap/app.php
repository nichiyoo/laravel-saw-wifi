<?php

use App\Http\Middleware\RoleCheck;
use Illuminate\Foundation\Application;
use App\Http\Middleware\EnvirontmentCheck;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

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
        $middleware->trustProxies(at: '*');
        $middleware->alias([
            'role' => RoleCheck::class,
            'env' => EnvirontmentCheck::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
