<?php

declare(strict_types=1);

namespace Dashboards\Widgets;

use Dashboards\Widgets\Charts\Chart;
use Dashboards\Widgets\Charts\ChartsJs\Configuration;
use Dashboards\Widgets\Charts\ChartsJs\Datasets;
use Dashboards\Widgets\Charts\Filter;
use Dashboards\Widgets\Interfaces\ChartInterface;
use Dashboards\Widgets\Interfaces\ConfigurationInterface;

abstract class OptionsChartJS
{

    /**
     * @return ChartInterface
     */
    public function chart(): ChartInterface
    {
        return new Chart();
    }

    /**
     * @return Configuration
     */
    public function addConfiguration(): ConfigurationInterface
    {
        return new Configuration();
    }

    /**
     * @return Filter
     */
    public function addFilters(): Filter
    {
        return new Filter();
    }

    /**
     * @return Datasets
     */
    public function addDatasets(): Datasets
    {
        return new Datasets();
    }

    /**
     * @return BarChartWidget
     */
    public function chartBar(): BarChartWidget
    {
        return new BarChartWidget();
    }

    /**
     * @return LineChartWidget
     */
    public function chartLine(): LineChartWidget
    {
        return new LineChartWidget();
    }
}