<?php

namespace Dashboards\Core;

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
    public function load(): \Illuminate\View\Factory
    {
        $container = App::getInstance();

        // we have to bind our app class to the interface
        // as the blade compiler needs the `getNamespace()` method to guess Blade component FQCNs
        $container->instance(\Illuminate\Contracts\Foundation\Application::class, $container);

        // Configuration
        // Note that you can set several directories where your templates are located
        $pathsToTemplates = [dirname(__DIR__, 3) . '/templates'];
        $pathToCompiledTemplates = dirname(__DIR__, 3) . '/compiled';

        // Dependencies
        $filesystem = new Filesystem();
        $eventDispatcher = new \Illuminate\Events\Dispatcher($container);

        // Create View Factory capable of rendering PHP and Blade templates
        $viewResolver = new EngineResolver();
        $bladeCompiler = new BladeCompiler($filesystem, $pathToCompiledTemplates);

        $viewResolver->register('blade', function () use ($bladeCompiler) {
            return new CompilerEngine($bladeCompiler);
        });

        $viewFinder = new FileViewFinder($filesystem, $pathsToTemplates);
        $viewFactory = new Factory($viewResolver, $viewFinder, $eventDispatcher);
        $viewFactory->setContainer($container);
        Facade::setFacadeApplication($container);
        $container->instance(Factory::class, $viewFactory);
        $container->alias(
            Factory::class,
            (new class extends View {
                public static function getFacadeAccessor()
                {
                    return parent::getFacadeAccessor();
                }
            })::getFacadeAccessor()
        );
        $container->instance(BladeCompiler::class, $bladeCompiler);
        $container->alias(
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
