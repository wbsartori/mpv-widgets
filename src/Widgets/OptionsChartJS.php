<?php

declare(strict_types=1);

namespace Dashboards\Widgets;

use Dashboards\Widgets\Charts\ChartsJs\ChartJS;
use Dashboards\Widgets\Charts\ChartsJs\Configuration;
use Dashboards\Widgets\Charts\ChartsJs\Datasets;
use Dashboards\Widgets\Charts\Filter;
use Dashboards\Widgets\Components\Components;
use Dashboards\Widgets\Interfaces\ChartInterface;
use Dashboards\Widgets\Interfaces\ConfigurationInterface;
use Dashboards\Widgets\Interfaces\DatasetsInterface;
use Dashboards\Widgets\Interfaces\FilterInterface;

abstract class OptionsChartJS
{
    /**
     * @return ChartInterface
     */
    public function chart(): ChartInterface
    {
        return new ChartJS();
    }

    /**
     * @return Configuration
     */
    public function addConfiguration(): ConfigurationInterface
    {
        return new Configuration();
    }

    /**
     * @return Components
     */
    public function addComponents(): Components
    {
        return new Components();
    }

    /**
     * @return Filter
     */
    public function addFilters(): FilterInterface
    {
        return new Filter();
    }

    /**
     * @return Datasets
     */
    public function addDatasets(): DatasetsInterface
    {
        return new Datasets();
    }
}
