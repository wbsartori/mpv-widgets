<?php

declare(strict_types=1);

namespace Dashboards\Widgets\Charts\ShadcnUI;

use Dashboards\Widgets\Charts\ShadcnUI\Interfaces\ShadcnUIConfigurationInterface;

class Configuration implements ShadcnUIConfigurationInterface
{
    private array $chartData;
    private array $chartConfig;

    public function get(): array
    {
        return [
            'chartData' => $this->chartData,
            'chartConfig' => $this->chartConfig,
        ];
    }

    public function chartData(array $data): ShadcnUIConfigurationInterface
    {
        $this->chartData = $data;
        return $this;
    }

    public function chartConfig(array $config): ShadcnUIConfigurationInterface
    {
        $this->chartConfig = $config;
        return $this;
    }
}
