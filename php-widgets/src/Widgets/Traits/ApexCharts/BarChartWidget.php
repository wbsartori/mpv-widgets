<?php

namespace Dashboards\Widgets\Traits\ApexCharts;

trait BarChartWidget
{
    /**
     * @var string
     */
    protected $typeBar = 'bar';

    /**
     * @var array
     */
    private $chartBarTypePattern = [
        'type' => 'bar',
        'height' => 500,
        'background' => '#fcd1d1',
        'foreColor' => '#be0202',
        'fontFamily' => 'Helvetica, Arial, sans-serif',
    ];

    /**
     * @param array $data order params {
     * dataCharts,
     * dataLabels,
     * categories,
     * filters
     * }
     * @return array { chartBar }
     */
    public function amountBarChart(array $data): array
    {
        $data = $this->verifyEmptyItems($data);

        return [
            'card' => $data[0],
            'filters' => $data[1]
        ];
    }

    /**
     * @param array $data
     * @return array
     */
    private function verifyEmptyItems(array $data): array
    {
        foreach ($data as $value) {
            foreach ($this->chartBarTypePattern as $key => $item) {
                if (empty($value['chart'][$key])) {
                    $data[0]['chart'][$key] = $item;
                }
            }
        }
        return $data;
    }
}
