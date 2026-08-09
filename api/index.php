<?php

echo "1 - PHP works<br>";

require __DIR__ . '/../vendor/autoload.php';

echo "2 - Autoload works<br>";

$app = require_once __DIR__ . '/../bootstrap/app.php';

echo "3 - Laravel bootstrap works<br>";

$request = Illuminate\Http\Request::capture();

echo "4 - Request works<br>";

$response = $app->handleRequest($request);

echo "5 - Laravel handled request<br>";

$response->send();

$app->terminate();
