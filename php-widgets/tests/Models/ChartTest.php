<?php

namespace Dashboards\Tests\Models;

use Dashboards\Models\Chart;
use PHPUnit\Framework\TestCase;

class ChartTest extends TestCase
{
    public function testGet()
    {
        $chart = new Chart();
        $expected = array(
            'title' => 'Chart Title',
            'name' => 'Chart Name',
            'chart' =>
                array(
                    'type' => 'bar',
                    'labels' =>
                        array(
                            0 => 'one',
                            1 => 'tow',
                            2 => 'three',
                        ),
                    'data' =>
                        array(
                            0 => 1,
                            1 => 2,
                            2 => 3,
                        ),
                ),
            'filters' =>
                array(
                    'filters' => 'filter',
                ),
        );
        $current = $chart->setChart([
            'type' => 'bar',
            'labels' => ['one', 'tow', 'three'],
            'data' => [1, 2, 3],
        ])
            ->setName('Chart Name')
            ->setTitle('Chart Title')
            ->setFilters(['filters' => 'filter'])
            ->get();

        self::assertEquals($expected, $current);
    }
}
