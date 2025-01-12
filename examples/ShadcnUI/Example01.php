<?php

declare(strict_types=1);

namespace Dashboards\Examples\ShadcnUI;

use Dashboards\Widgets\Interfaces\InterfaceWidget;
use Dashboards\Widgets\OptionsChartJS;
use Dashboards\Widgets\OptionsShadcnUI;

class Example01 extends OptionsShadcnUI implements InterfaceWidget
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

    public function render(): array
    {
        return self::chart()
            ->title(self::CARDS['chart']['title'])
            ->name(self::CARDS['chart']['name'])
            ->chart(
                $this->addConfiguration()
                    ->chartData([
                        ['month' => 'January', 'ativo' => 186, 'inativo' => 80],
                        ['month' => 'February', 'ativo' => 305, 'inativo' => 200],
                        ['month' => 'March', 'ativo' => 237, 'inativo' => 120],
                        ['month' => 'April', 'ativo' => 73, 'inativo' => 190],
                        ['month' => 'May', 'ativo' => 209, 'inativo' => 130],
                        ['month' => 'June', 'ativo' => 214, 'inativo' => 140],
                    ])
                    ->chartConfig(
                        [
                            'ativo' => [
                                'label' => 'Janeiro',
                                'color' => 'hsl(var(--chart-1))'
                            ],
                            'inativo' => [
                                'label' => 'Fevereiro',
                                'color' => 'hsl(var(--chart-2))'
                            ],
                        ]
                    )
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
