<?php

declare(strict_types=1);

namespace Dashboards\Examples\Dashboards\Home;

use Dashboards\Widgets\Interfaces\InterfaceWidget;
use Dashboards\Widgets\Traits\ChartsJs\OptionsChartJS;

class Card1 implements InterfaceWidget
{
    use OptionsChartJS;

    private const CARDS = [
        'chart' => [
            'title' => 'Clientes Inativados por mes 2',
            'name' => 'clientes_inativados_mes'
        ],
    ];

    public function query(): array
    {
        return [];
    }

    public function render(): array
    {
        return self::chart()
            ->title(self::CARDS['chart']['title'])
            ->name(self::CARDS['chart']['name'])
            ->chart(
                $this->addConfiguration()
                    ->labels([
                        'Janeiro', 'Fevereiro', 'Marco',
                        'Abril', 'Maio', 'Junho', 'Julho',
                        'Setembro', 'Novembro', 'Dezembro'
                    ])
                    ->datasets(
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
                    ->options(
                        [
                            'scales' => [
                                'y' => [
                                    'beginAtZero' => true
                                ]
                            ],
                            'title' => [
                                'display' => true,
                                'text' => 'Chart.js Bar Chart'
                            ]
                        ]
                    )
                    ->plugins([
                        'tootip' => [
                            'events' => ['click']
                        ],
                    ])
                    ->get()
            )
            ->filters(
                $this->addFilters()
                    ->filter('teste', '=', 'teste', 'teste', '=', 'teste')
                    ->filter('teste', '=', 'teste', 'teste', '=', 'teste', '1', 'OR')
                    ->betweenFilter('id', '=', ['1', '2'], 'teste', '=', ['1', '2'], '1', 'AND')
                    ->get()
            )
            ->get();
    }
}
