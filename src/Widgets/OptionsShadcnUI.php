<?php

declare(strict_types=1);

namespace Dashboards\Widgets;

use Dashboards\Widgets\Charts\Filter;
use Dashboards\Widgets\Charts\ShadcnUI\Configuration;
use Dashboards\Widgets\Charts\ShadcnUI\Interfaces\ShadcnUIConfigurationInterface;
use Dashboards\Widgets\Charts\ShadcnUI\ShadcnUI;
use Dashboards\Widgets\Interfaces\ChartInterface;
use Dashboards\Widgets\Interfaces\FilterInterface;
use Dashboards\Widgets\Interfaces\OptionsInterface;

abstract class OptionsShadcnUI implements OptionsInterface
{
    public function chart(): ChartInterface
    {
        return new ShadcnUI();
    }

    public function addConfiguration(): ShadcnUIConfigurationInterface
    {
        return new Configuration();
    }

    /**
     * @return Filter
     */
    public function addFilters(): FilterInterface
    {
        return new Filter();
    }
}
