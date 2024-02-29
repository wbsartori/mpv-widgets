<?php

namespace Dashboards\Widgets\Traits\ApexCharts;

trait LineChartWidget
{
    /**
     * @var string
     */
    protected $typeLine = 'line';

    /**
     * @param array $data order params {
     * dataCharts,
     * dataLabels,
     * categories,
     * filters
     * }
     * @return array { chartBar }
     */
    public function amountLineChart(array $data): array
    {
        return [
            'card' => $data[0],
            'filters' => empty($data[1]) ? [] : $data[1]
        ];
    }
}
