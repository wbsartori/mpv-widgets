<?php

namespace Dashboards\Tests\Models;

use Dashboards\Models\Filter;
use PHPUnit\Framework\TestCase;

class FilterTest extends TestCase
{
    public function testAddFilter()
    {
        $filter = new Filter();
        $current = $filter->addFilter('DisplayField', '=', 'DisplayValue', 'Field', '=', 'Value');
        self::assertInstanceOf(Filter::class, $current);
    }

    public function testAddBetweenFilter()
    {
        $filter = new Filter();
        $current = $filter->addBetweenFilter(
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
        $current = $filter->addFilter('DisplayField', '=', 'DisplayValue', 'Field', '=', 'Value')->get();
        self::assertEquals($expected, $current);
    }
}
