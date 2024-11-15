<?php

namespace Dashboards\Tests\Models;

use Dashboards\Widgets\Charts\Filter;
use PHPUnit\Framework\TestCase;

class FilterTest extends TestCase
{
    public function testFilter()
    {
        $filter = new Filter();
        $current = $filter->filter('DisplayField', '=', 'DisplayValue', 'Field', '=', 'Value');
        self::assertInstanceOf(Filter::class, $current);
    }

    public function testBetweenFilter()
    {
        $filter = new Filter();
        $current = $filter->betweenFilter(
            'DisplayField',
            '=',
            ['one', 'two'],
            'Field',
            '=',
            [1, 2]
        );

        self::assertInstanceOf(Filter::class, $current);
    }

    public function testGet()
    {
        $filter = new Filter();
        $expected = array(
            0 =>
                array(
                    'display_campo' => 'DisplayField',
                    'display_valor' => 'DisplayValue',
                    'display_operador' => '=',
                    'campo' => 'Field',
                    'operador' => '=',
                    'valor' => 'Value',
                ),

        );
        $current = $filter->filter('DisplayField', '=', 'DisplayValue', 'Field', '=', 'Value')->get();
        self::assertEquals($expected, $current);
    }
}
