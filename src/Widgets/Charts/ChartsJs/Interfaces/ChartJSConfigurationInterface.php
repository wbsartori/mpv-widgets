<?php

namespace Dashboards\Widgets\Charts\ChartsJs\Interfaces;

use Dashboards\Widgets\Interfaces\ConfigurationInterface;

interface ChartJSConfigurationInterface extends ConfigurationInterface
{
    public function type(string $type): ConfigurationInterface;
    public function labels(array $labels): ConfigurationInterface;
    public function datasets(array $datasets): ConfigurationInterface;
    public function options(array $options): ConfigurationInterface;
    public function plugins(array $plugins): ConfigurationInterface;
}
