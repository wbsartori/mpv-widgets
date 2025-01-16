<?php

declare(strict_types=1);

namespace Dashboards\Examples\ChartJS;

use Dashboards\Widgets\Components\Actions\ActionButton;
use Dashboards\Widgets\Interfaces\InterfaceWidget;
use Dashboards\Widgets\OptionsChartJS;

class Example01 extends OptionsChartJS implements InterfaceWidget
{
    private const CARDS = [
        'chart' => [
            'title' => 'Clientes Inativados por mes 2',
            'name' => 'clientes_inativados_mes',
        ],
    ];

    public function query(): array
    {
        return [];
    }

    public function rawChart(): array
    {
        return self::chart()
            ->title(self::CARDS['chart']['title'])
            ->name(self::CARDS['chart']['name'])
            ->charts(
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
                                'label' => 'Ativados',
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
            ->components(
                [
                    $this->addComponents()
                        ->button()
                        ->name('Botão de ação 1')
                        ->action(
                            ActionButton::make()->onClickAlert('Ação 1')
                        ),
                    $this->addComponents()->button()->name('Botão de ação 2'),
                    $this->addComponents()->selectButton()->name('filial_id')->options([
                        'filial1' => 'Filial1',
                        'filial2' => 'Filial2',
                        'filial3' => 'Filial3',
                    ])
                ]
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
