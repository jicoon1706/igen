<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

$app = Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();

// Hostinger: document root is public_html (the project base), not base_path/public.
// If the built assets live at the base path, treat the base path as the public dir.
if (is_file(dirname(__DIR__).'/build/manifest.json')) {
    $app->usePublicPath(dirname(__DIR__));
}

return $app;
