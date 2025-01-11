<?php

namespace Dashboards\Examples;

use Dashboards\Widgets\Interfaces\InterfaceWidget;
use Dashboards\Widgets\OptionsChartJS;

class Example07 extends OptionsChartJS implements InterfaceWidget
{
    private const CARDS = [
        'chart' => [
            'title' => 'Clientes asdasdasdas por mes',
            'name' => 'clientes_inativados_mes',
        ],
    ];

    public function query(): array
    {
        return [];
    }

    public function render(): array
    {
        return $this->chart()
            ->title(self::CARDS['chart']['title'])
            ->name(self::CARDS['chart']['name'])
            ->chart(
                $this->addConfiguration()
                    ->type('line')
                    ->labels([
                        'Janeiro', 'Fevereiro', 'Marco',
                        'Abril', 'Maio', 'Junho', 'Julho',
                        'Setembro', 'Novembro', 'Dezembro',
                    ])
                    ->datasets(
                        [
                            [
                                'label' => 'Ativaaaaaaaaaaaaaados',
                                'data' => [12, 10, 3, 5, 2, 3, 10, 8, 9, 10, 25, 30],
                                'borderWidth' => 1,
                                'backgroundColor' => 'red',
                            ],
                            [
                                'label' => 'Inativados',
                                'data' => [30, 5, 23, 2, 8, 19, 3, 5, 2, 3, 9, 8],
                                'borderWidth' => 1,
                                'backgroundColor' => 'blue',
                            ],
                        ]
                    )
                    ->options(
                        [
                            'scales' => [
                                'y' => [
                                    'beginAtZero' => true,
                                ],
                            ],
                            'title' => [
                                'display' => true,
                                'text' => 'Chart.js Bar Chart',
                            ],
                        ]
                    )
                    ->plugins([
                        'tootip' => [
                            'events' => ['click'],
                        ],
                    ])
            )
            ->filters(
                $this->addFilters()
                    ->filter('teste', '=', 'teste', 'teste', '=', 'teste')
                    ->filter('teste', '=', 'teste', 'teste', '=', 'teste', '1', 'OR')
                    ->betweenFilter('id', '=', ['1', '2'], 'teste', '=', ['1', '2'], '1', 'AND')
            )
            ->get();
    }
}
