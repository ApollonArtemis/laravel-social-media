<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

if (file_exists($maintenance = __DIR__ . '/../storage/framework/maintenance.php')) {
    require $maintenance;
}

require __DIR__ . '/../vendor/autoload.php';

/** @var Application $app */
$app = require_once __DIR__ . '/../bootstrap/app.php';
$app->handleRequest(Request::capture());

// Ensure writable dirs exist in serverless environment
if (!is_dir(__DIR__ . '/../storage/framework/views')) {
    mkdir(__DIR__ . '/../storage/framework/views', 0755, true);
}
if (!is_dir(__DIR__ . '/../storage/framework/cache')) {
    mkdir(__DIR__ . '/../storage/framework/cache', 0755, true);
}
if (!is_dir(__DIR__ . '/../storage/framework/sessions')) {
    mkdir(__DIR__ . '/../storage/framework/sessions', 0755, true);
}