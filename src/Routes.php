<?php

declare(strict_types=1);

namespace Dashboards;

use Illuminate\Container\Container;
use Illuminate\Events\Dispatcher;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Routing\Router;
use Illuminate\Routing\UrlGenerator;

class Routes
{
    private const FILENAME = 'web';
    private const PHP_EXTENSION = '.php';

    private const DIRECTORY_ROUTER = 'src/Routes';

    public function routes()
    {
        $container = new Container();
        $request = Request::capture();
        $container->instance('Illuminate\Http\Request', $request);
        $events = new Dispatcher($container);
        $router = new Router($events, $container);
        require_once dirname(__DIR__)
            . DIRECTORY_SEPARATOR
            . self::DIRECTORY_ROUTER
            . DIRECTORY_SEPARATOR
            . self::FILENAME
            . self::PHP_EXTENSION;
        $redirect = new Redirector(new UrlGenerator($router->getRoutes(), $request));
        $response = $router->dispatch($request);
        $response->send();
    }
}
