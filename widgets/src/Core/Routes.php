<?php

namespace Dashboards\Core;

use Illuminate\Container\Container;
use Illuminate\Events\Dispatcher;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Routing\Router;
use Illuminate\Routing\UrlGenerator;

class Routes
{
    /**
     * @var string
     */
    private $path;
    private $filename;
    private $userPermissionPath;
    private const DIRECTORY_PATH = 'routes';
    private const FILENAME = 'web';
    private const PHP_EXTENSION = '.php';

    public function routes()
    {
        $container = new Container();
        $request = Request::capture();
        $container->instance('Illuminate\Http\Request', $request);
        $events = new Dispatcher($container);
        $router = new Router($events, $container);
        $this->generateEmptyRoutesDirectory();
        $this->generateEmptyRoutesFile();
        require_once $this->filename;
        $redirect = new Redirector(new UrlGenerator($router->getRoutes(), $request));
        $response = $router->dispatch($request);
        $response->send();
    }

    public function setPath(string $path, int $directoryLevel = 1): Routes
    {
        $this->path = dirname(__DIR__, $directoryLevel) . DIRECTORY_SEPARATOR . $path;
        return $this;
    }

    /**
     * @param $filename
     * @param int $directoryLevel
     * @return $this
     */
    public function setFilename($filename, int $directoryLevel = 1): Routes
    {
        $path = $this->path == ''
            ? dirname(__DIR__, $directoryLevel) . DIRECTORY_SEPARATOR . self::DIRECTORY_PATH . DIRECTORY_SEPARATOR
            : $this->path . DIRECTORY_SEPARATOR;

        $this->filename = $path . $filename . self::PHP_EXTENSION;
        return $this;
    }

    /**
     * @param mixed $userPermissionPath
     * @return Routes
     */
    public function setUserPermissionPath($userPermissionPath): Routes
    {
        $this->userPermissionPath = $userPermissionPath;
        return $this;
    }

    public function generateEmptyRoutesFile(): bool
    {
        if (is_null($this->filename)) {
            $this->filename = $this->path . DIRECTORY_SEPARATOR . self::FILENAME . self::PHP_EXTENSION;
            if (!file_exists($this->filename)) {
                $file = fopen($this->filename, 'wr');
                fwrite($file, $this->routeTemplate());
            }

            return true;
        }

        if (!file_exists($this->filename)) {
            $file = fopen($this->filename, 'wr');
            fwrite($file, $this->routeTemplate());

            return true;
        }

        return false;
    }

    public function generateEmptyRoutesDirectory()
    {
            $this->userPermissionPath ?? $this->setUserPermissionPath('www-data');
        if (is_null($this->path)) {
            $this->path = dirname(__DIR__, 3) . DIRECTORY_SEPARATOR . self::DIRECTORY_PATH;
            if (!file_exists($this->path)) {
                mkdir($this->path, 0775, true);
                chown($this->path, $this->userPermissionPath);
            }
        }

        if (!file_exists($this->path)) {
            mkdir($this->path, 0775, true);
            chown($this->path, $this->userPermissionPath);
        }
    }

    public function routeTemplate(): string
    {
        $template = "<?php" . PHP_EOL;
        $template .= "require 'vendor/autoload.php';" . PHP_EOL . PHP_EOL;
        $template .= "use Illuminate\Routing\Router;" . PHP_EOL;
        $template .= "use Illuminate\Events\Dispatcher;" . PHP_EOL . PHP_EOL;
        $template .= "$" . "router = new Router(new Dispatcher());" . PHP_EOL . PHP_EOL;
        $template .= "/** @var $" . "router Router */" . PHP_EOL;
        $template .= "$" . "router->group(['namespace' => 'Controllers', 'prefix' => '/'], function (Router $" . "router) {" . PHP_EOL;
        $template .= "      $" . "router->get('/', ['name' => 'home.index', 'uses' => 'HomeController@index']);" . PHP_EOL;
        $template .= "});" . PHP_EOL;
        $template .= "$" . "router->any('{any}', function () {" . PHP_EOL;
        $template .= "        return '<h1>Controller not found!</h1>';" . PHP_EOL;
        $template .= "})->where('any', '(.*)');" . PHP_EOL;
        $template .= "?>" . PHP_EOL;
        return $template;
    }
}
