<?php

echo "1 - PHP works<br>";

require __DIR__ . '/../vendor/autoload.php';

echo "2 - Autoload works<br>";

$app = require_once __DIR__ . '/../bootstrap/app.php';

echo "3 - Laravel bootstrap works<br>";

$request = Illuminate\Http\Request::capture();

echo "4 - Request works<br>";

try {
    $response = $app->handleRequest($request);

    echo "5 - Request handled<br>";

    $response->send();

    echo "6 - Response sent<br>";

    $app->terminate();

} catch (\Throwable $e) {

    echo "<h2>ERROR:</h2>";

    echo "<pre>";
    echo "Message: " . $e->getMessage() . "\n\n";
    echo "File: " . $e->getFile() . "\n";
    echo "Line: " . $e->getLine() . "\n\n";
    echo "Trace:\n" . $e->getTraceAsString();
    echo "</pre>";
}
