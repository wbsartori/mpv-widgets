<?php

declare(strict_types=1);

namespace Dashboards;

use Illuminate\Container\Container;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\View;
use Illuminate\View\Compilers\BladeCompiler;
use Illuminate\View\Engines\CompilerEngine;
use Illuminate\View\Engines\EngineResolver;
use Illuminate\View\Factory;
use Illuminate\View\FileViewFinder;

class Views
{

    private const TEMPLATE_PATH = 'src/Templates';

    private const COMPILER_PATH = 'src/Templates/compiled';

    protected Container $container;

    public function load(): \Illuminate\View\Factory
    {
        $this->container = App::getInstance();

        // we have to bind our app class to the interface
        // as the blade compiler needs the `getNamespace()` method to guess Blade component FQCNs
        $this->container->instance(\Illuminate\Contracts\Foundation\Application::class, $this->container);

        // Configuration
        // Note that you can set several directories where your templates are located
        $pathsToTemplates = [
            dirname(__DIR__)
            . DIRECTORY_SEPARATOR
            . self::TEMPLATE_PATH,
        ];
        $pathToCompiledTemplates = dirname(__DIR__)
            . DIRECTORY_SEPARATOR
            . self::COMPILER_PATH;

        // Dependencies
        $filesystem = new Filesystem();
        $eventDispatcher = new \Illuminate\Events\Dispatcher($this->container);

        // Create View Factory capable of rendering PHP and Blade templates
        $viewResolver = new EngineResolver();
        $bladeCompiler = new BladeCompiler($filesystem, $pathToCompiledTemplates);

        $viewResolver->register('blade', function () use ($bladeCompiler) {
            return new CompilerEngine($bladeCompiler);
        });

        $viewFinder = new FileViewFinder($filesystem, $pathsToTemplates);
        $viewFactory = new Factory($viewResolver, $viewFinder, $eventDispatcher);
        $viewFactory->setContainer($this->container);
        Facade::setFacadeApplication($this->container);
        $this->container->instance(Factory::class, $viewFactory);
        $this->container->alias(
            Factory::class,
            (new class extends View {
                public static function getFacadeAccessor()
                {
                    return parent::getFacadeAccessor();
                }
            })::getFacadeAccessor()
        );
        $this->container->instance(BladeCompiler::class, $bladeCompiler);
        $this->container->alias(
            BladeCompiler::class,
            (new class extends Blade {
                public static function getFacadeAccessor()
                {
                    return parent::getFacadeAccessor();
                }
            })::getFacadeAccessor()
        );

        return $viewFactory;
    }
}
