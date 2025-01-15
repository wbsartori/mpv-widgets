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

    public function testBetweenFilterWithGroup()
    {
        $filter = new Filter();
        $current = $filter->betweenFilter(
            'DisplayField',
            '=',
            ['one', 'two'],
            'Field',
            '=',
            [1, 2],
            '1'
        );

        self::assertInstanceOf(Filter::class, $current);
    }

    public function testBetweenFilterWithCondition()
    {
        $filter = new Filter();
        $name = 'manezinho';
        $current = $filter->betweenFilter(
            'DisplayField',
            '=',
            ['one', 'two'],
            'Field',
            '=',
            [1, 2],
            '1',
            $name === 'manezinho' ?? ''

        );
        self::assertInstanceOf(Filter::class, $current);
    }

    public function testFilterWithGroupAndCondition()
    {
        $filter = new Filter();
        $name = 'manezinho';
        $current = $filter->filter(
            'DisplayField',
            '=',
            'one',
            'Field',
            '=',
            1,
            'C',
            $name == 'manezinho' ?? ''

        );
        self::assertSame($filter, $current);
    }
}
