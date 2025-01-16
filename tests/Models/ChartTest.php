<?php

namespace Dashboards\Tests\Models;

use Dashboards\Widgets\Charts\ChartsJs\ChartJS;
use Dashboards\Widgets\Charts\ChartsJs\Configuration;
use Dashboards\Widgets\Charts\Filter;
use Dashboards\Widgets\Interfaces\ChartInterface;
use PHPUnit\Framework\TestCase;

class ChartTest extends TestCase
{
    public function testGet()
    {
        $chart = new ChartJS();
        $current = $chart->charts(
            (new Configuration())
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
            ->name('Chart Name')
            ->title('Chart Title')
            ->filters((new Filter())->filter('teste', '=', 'teste', 'teste', '=', 'teste'));

        self::assertInstanceOf(ChartInterface::class, $current);
    }
}
