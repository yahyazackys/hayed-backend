<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

<<<<<<< HEAD
ini_set('max_execution_time', '120'); // Set to 120 seconds
ini_set('max_input_time', '120');

=======
>>>>>>> c1748c8 (terbaru)
/*
|--------------------------------------------------------------------------
| Check If The Application Is Under Maintenance
|--------------------------------------------------------------------------
|
| If the application is in maintenance / demo mode via the "down" command
| we will load this file so that any pre-rendered content can be shown
| instead of starting the framework, which could cause an exception.
|
*/

<<<<<<< HEAD
if (file_exists($maintenance = __DIR__ . '/../storage/framework/maintenance.php')) {
=======
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
>>>>>>> c1748c8 (terbaru)
    require $maintenance;
}

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| this application. We just need to utilize it! We'll simply require it
| into the script here so we don't need to manually load our classes.
|
*/

<<<<<<< HEAD
require __DIR__ . '/../vendor/autoload.php';
=======
require __DIR__.'/../vendor/autoload.php';
>>>>>>> c1748c8 (terbaru)

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request using
| the application's HTTP kernel. Then, we will send the response back
| to this client's browser, allowing them to enjoy our application.
|
*/

<<<<<<< HEAD
$app = require_once __DIR__ . '/../bootstrap/app.php';
=======
$app = require_once __DIR__.'/../bootstrap/app.php';
>>>>>>> c1748c8 (terbaru)

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);
