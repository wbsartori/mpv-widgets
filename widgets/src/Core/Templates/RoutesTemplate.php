<?php

namespace Dashboards\Core\Templates;

class RoutesTemplate
{
    public static function template(): string
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
