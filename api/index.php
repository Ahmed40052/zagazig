<?php

// Vercel filesystem is read-only except /tmp
$storage = '/tmp/storage';
foreach (['app', 'framework/cache', 'framework/sessions', 'framework/views', 'logs'] as $dir) {
    if (!is_dir("$storage/$dir")) {
        mkdir("$storage/$dir", 0777, true);
    }
}

$paths = [
    'APP_SERVICES_CACHE' => '/tmp/services.php',
    'APP_PACKAGES_CACHE' => '/tmp/packages.php',
    'APP_CONFIG_CACHE'   => '/tmp/config.php',
    'APP_ROUTES_CACHE'   => '/tmp/routes.php',
    'APP_EVENTS_CACHE'   => '/tmp/events.php',
];
foreach ($paths as $key => $value) {
    putenv("$key=$value");
    $_ENV[$key] = $value;
    $_SERVER[$key] = $value;
}

try {
    require __DIR__ . '/../vendor/autoload.php';

    $app = require_once __DIR__ . '/../bootstrap/app.php';
    $app->useStoragePath($storage);

    $request = Illuminate\Http\Request::capture();
    $response = $app->handleRequest($request);
    $response->send();
    $app->terminate();
} catch (Throwable $e) {
    // TEMPORARY: remove after debugging
    http_response_code(500);
    header('Content-Type: text/plain; charset=utf-8');
    echo get_class($e) . ': ' . $e->getMessage() . "\n\n" . $e->getFile() . ':' . $e->getLine();
}
