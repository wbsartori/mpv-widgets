<?php

declare(strict_types=1);

namespace Dashboards\Widgets\Charts\ShadcnUI\Interfaces;

interface ShadcnUIDatasetsInterface
{
    /**
     * @param array $data {chartData: array, chartConfig: array}
     * @return array
     */
    public function chart(array $data): array;
}
