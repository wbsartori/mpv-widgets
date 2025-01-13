<?php

declare(strict_types=1);

namespace Dashboards\Widgets\Interfaces;

use Dashboards\Widgets\Charts\ChartsJs\Interfaces\ChartJSConfigurationInterface;
use Dashboards\Widgets\Charts\ShadcnUI\Interfaces\ShadcnUIConfigurationInterface;

interface OptionsInterface
{
    public function chart(): ChartInterface;

    /**
     * @return ConfigurationInterface<ShadcnUIConfigurationInterface, ChartJSConfigurationInterface>
     */
    public function addConfiguration(): ConfigurationInterface;

    public function addFilters(): FilterInterface;
}
