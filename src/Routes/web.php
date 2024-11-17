<?php

/*
|--------------------------------------------------------------------------
| Route file
|--------------------------------------------------------------------------
*/

use Illuminate\Routing\Router;
use Illuminate\Events\Dispatcher;
use Illuminate\Http\Request;

$router = new Router(new Dispatcher());

/*
|--------------------------------------------------------------------------
| Register dashboard routes
|--------------------------------------------------------------------------
|
| Each dashboard must have a controller and for each dashboard card a method must be added to the controller
|
*/
$router->group([
    'namespace' => '\\Dashboards\\Controllers',
    'prefix' => '/'
], function (Router $router) {
    $configFile = require_once dirname(__DIR__, 2) . '/config/dashboards.php';
    $providers = \Dashboards\Helpers\ProvidersHelper::make($configFile)->handleCards();
    $router->get("{$providers['uri']}", function (Request $request) use ($providers) {
        $charts = $providers['charts'];
        $quantity = 3;
        $controller = new \Dashboards\Controllers\BaseController();
        $controller->views('index', compact('charts', 'quantity'));
    });
});

/*
|--------------------------------------------------------------------------
| Error route configuration
|--------------------------------------------------------------------------
|
| Route to return an error if one of the controllers is not found
|
*/
$router->any(
    '{any}',
    [
        'name' => 'notFound',
        'uses' => '\\Dashboards\\Controllers\\HomeController@notFound'
    ]
)->where('any', '(.*)');

return $router;
