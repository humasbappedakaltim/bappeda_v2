<?php

use Illuminate\Foundation\Application;
use App\Http\Middleware\RoleMiddleware;
use App\Http\Middleware\PermissionMiddleware;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {

        $middleware->use([
            // secure headers
            \App\Http\Middleware\HttpRedirect::class,
            \App\Http\Middleware\HSTS::class,
            \App\Http\Middleware\FrameGuard::class,
            \App\Http\Middleware\SecureHeadersMiddleware::class,
        ]);

        $middleware->alias([
            'role' => RoleMiddleware::class,
            'permission' => PermissionMiddleware::class,
            // 'role_or_permission' => \Spatie\Permission\Middleware\RoleOrPermissionMiddleware::class,
            'setlocale' => \App\Http\Middleware\SetLocale::class,
        ]);

    })

    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
