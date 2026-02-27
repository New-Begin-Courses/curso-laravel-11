<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Treinamento de Middleware com o Mateus
        /* $middleware->web([
            \App\Http\Middleware\TesteMiddleware::class
        ]);

        $middleware->alias([
            'teste' => \App\Http\Middleware\TesteMiddleware::class,
        ]); */
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
