<?php

namespace Dashboards\Examples;

use Dashboards\Widgets\Interfaces\InterfaceWidget;
use Dashboards\Widgets\Traits\ChartsJs\OptionsChartJS;

class ChartBarExample implements InterfaceWidget
{
    use OptionsChartJS;

    private const CARDS = [
        'chart1' => [
            'title' => 'Clientes Inativados por mes',
            'name' => 'clientes_inativados_mes'
        ],
        'chart2' => [
            'title' => 'Clientes status',
            'name' => 'clientes_status'
        ],
    ];

    public function query(): array
    {
        return [];
    }

    public function render(): array
    {
        return $this->chart()
            ->setTitle(self::CARDS['chart1']['title'])
            ->setName(self::CARDS['chart1']['name'])
            ->setChart(
                $this->addConfiguration()
                    ->setLabels([
                        'Janeiro', 'Fevereiro', 'Marco',
                        'Abril', 'Maio', 'Junho', 'Julho',
                        'Setembro', 'Novembro', 'Dezembro'
                    ])
                    ->setDatasets(
                        [
                            [
                                'label' => 'Ativados',
                                'data' => [12, 10, 3, 5, 2, 3, 10, 8, 9, 10, 25, 30],
                                'borderWidth' => 1,
                                'backgroundColor' => 'red'
                            ],
                            [
                                'label' => 'Inativados',
                                'data' => [30, 5, 23, 2, 8, 19, 3, 5, 2, 3, 9, 8],
                                'borderWidth' => 1,
                                'backgroundColor' => 'blue'
                            ]
                        ]
                    )
                    ->setOptions(
                        [
                            'scales' => [
                                'y' => [
                                    'beginAtZero' => true
                                ]
                            ]
                        ]
                    )
                    ->setPlugins([
                        'tootip' => [
                            'events' => ['click']
                        ]
                    ])
                    ->get()
            )
            ->setFilters(
                $this->addFilters()
                    ->addFilter('teste', '=', 'teste', 'teste', '=', 'teste')
                    ->addFilter('teste', '=', 'teste', 'teste', '=', 'teste')
                    ->addBetweenFilter('id', '=', ['1', '2'], 'teste', '=', ['1', '2'])
                    ->get()
            )
            ->get();
    }
}
