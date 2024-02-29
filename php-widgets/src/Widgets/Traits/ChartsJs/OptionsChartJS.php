<?php

namespace Dashboards\Widgets\Traits\ChartsJs;

use Dashboards\Models\ChartsJs\Configuration;
use Dashboards\Models\Filter;
use Dashboards\Models\Chart;
use Dashboards\Widgets\Abstracts\Widget;

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
}
