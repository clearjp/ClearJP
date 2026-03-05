<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

// marco el inicio de la ejecución.
define('LARAVEL_START', microtime(true));

// verifico si la aplicación está en mantenimiento.
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// registro el autoloader de Composer.
require __DIR__.'/../vendor/autoload.php';

// arranco Laravel y manejo la solicitud.
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

$app->handleRequest(Request::capture());
