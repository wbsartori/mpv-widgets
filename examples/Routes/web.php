<?php

/*
|--------------------------------------------------------------------------
| Route file
|--------------------------------------------------------------------------
*/

use Illuminate\Routing\Router;
use Illuminate\Events\Dispatcher;

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
    'namespace' => '\\Dashboards\\Examples\\Controllers',
    'prefix' => '/'
], function (Router $router) {
    $router->get('/', ['name' => 'home.index', 'uses' => 'HomeController@index']);
});


/*
|--------------------------------------------------------------------------
| Error route configuration
|--------------------------------------------------------------------------
|
| Route to return an error if one of the controllers is not found
|
*/
$router->any('{any}', function () {
    return '<h1>Controller not found!</h1>';
})->where('any', '(.*)');

return $router;
