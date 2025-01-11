<?php

namespace Dashboards\Tests\Models\ChartsJs;

use Dashboards\Widgets\Charts\ChartsJs\Configuration;
use PHPUnit\Framework\TestCase;

class ConfigurationTest extends TestCase
{
    public function testGet()
    {
        $configuration = new Configuration();
        $expected = array(
            'type' => 'bar',
            'data' =>
                array(
                    'labels' =>
                        array(
                            0 => 'Janeiro',
                            1 => 'Fevereiro',
                            2 => 'Marco',
                            3 => 'Abril',
                            4 => 'Maio',
                            5 => 'Junho',
                            6 => 'Julho',
                            7 => 'Setembro',
                            8 => 'Novembro',
                            9 => 'Dezembro',
                        ),
                    'datasets' =>
                        array(
                            0 =>
                                array(
                                    'label' => 'Ativados',
                                    'data' =>
                                        array(
                                            0 => 12,
                                            1 => 10,
                                            2 => 3,
                                            3 => 5,
                                            4 => 2,
                                            5 => 3,
                                            6 => 10,
                                            7 => 8,
                                            8 => 9,
                                            9 => 10,
                                            10 => 25,
                                            11 => 30,
                                        ),
                                    'borderWidth' => 1,
                                    'backgroundColor' => 'red',
                                ),
                            1 =>
                                array(
                                    'label' => 'Inativados',
                                    'data' =>
                                        array(
                                            0 => 30,
                                            1 => 5,
                                            2 => 23,
                                            3 => 2,
                                            4 => 8,
                                            5 => 19,
                                            6 => 3,
                                            7 => 5,
                                            8 => 2,
                                            9 => 3,
                                            10 => 9,
                                            11 => 8,
                                        ),
                                    'borderWidth' => 1,
                                    'backgroundColor' => 'blue',
                                ),
                        ),
                    'options' =>
                        array(
                            'scales' =>
                                array(
                                    'y' =>
                                        array(
                                            'beginAtZero' => true,
                                        ),
                                ),
                        ),
                    'plugins' =>
                        array(
                            'tootip' =>
                                array(
                                    'events' =>
                                        array(
                                            0 => 'click',
                                        ),
                                ),
                        ),
                ),
        );

        $current = $configuration
            ->type('bar')
            ->labels([
                'Janeiro', 'Fevereiro', 'Marco',
                'Abril', 'Maio', 'Junho', 'Julho',
                'Setembro', 'Novembro', 'Dezembro'
            ])
            ->datasets([
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
            ])
            ->plugins([
                'tootip' => [
                    'events' => ['click']
                ]
            ])
            ->options([
                'scales' => [
                    'y' => [
                        'beginAtZero' => true
                    ]
                ]
            ])
            ->get();

        self::assertEquals($expected, $current);
    }
}
