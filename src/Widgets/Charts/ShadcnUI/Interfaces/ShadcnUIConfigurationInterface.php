<?php

namespace Dashboards\Widgets\Charts\ShadcnUI\Interfaces;

use Dashboards\Widgets\Interfaces\ConfigurationInterface;

interface ShadcnUIConfigurationInterface extends ConfigurationInterface
{
    public function chartData(array $data): ShadcnUIConfigurationInterface;

    public function chartConfig(array $config): ShadcnUIConfigurationInterface;
}
