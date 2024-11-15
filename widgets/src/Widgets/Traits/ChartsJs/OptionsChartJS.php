<?php

namespace Dashboards\Widgets\Traits\ChartsJs;

use Dashboards\Widgets\Abstracts\Widget;
use Dashboards\Widgets\BarChartWidget;
use Dashboards\Widgets\LineChartWidget;
use Dashboards\Widgets\Charts\Chart;
use Dashboards\Widgets\Charts\ChartsJs\Configuration;
use Dashboards\Widgets\Charts\ChartsJs\Datasets;
use Dashboards\Widgets\Charts\Filter;

trait OptionsChartJS
{
    use Widget;

    /**
     * @return Chart
     */
    public function chart(): Chart
    {
        return new Chart();
    }
    /**
     * @return Configuration
     */
    public function addConfiguration(): Configuration
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
