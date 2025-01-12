<?php

declare(strict_types=1);

namespace Dashboards\Widgets;

use Dashboards\Widgets\Charts\Filter;
use Dashboards\Widgets\Charts\ShadcnUI\Configuration;
use Dashboards\Widgets\Charts\ShadcnUI\Interfaces\ShadcnUIDatasetsInterface;
use Dashboards\Widgets\Charts\ShadcnUI\ShadcnUI;
use Dashboards\Widgets\Charts\ShadcnUI\ShadcnUIDatasets;
use Dashboards\Widgets\Interfaces\ChartInterface;

abstract class OptionsShadcnUI
{

    public function chart(): ChartInterface
    {
        return new ShadcnUI();
    }

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

    public function addDatasets(): ShadcnUIDatasetsInterface
    {
        return new ShadcnUIDatasets();
    }
}
