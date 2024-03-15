<?php

namespace Dashboards\Widgets\Traits\ChartsJs;

trait LineChartWidget
{
    /**
     * @var string
     */
    public $type = 'line';

    /**
     * @var numeric
     */
    public $tension = 0;

    /**
     * @var {Color}
     */
    public $backgroundColor = 'Chart.defaults.backgroundColor';

    /**
     * @var numeric
     */
    public $borderWidth = 3;

    /**
     * @var {Color}
     */
    public $borderColor = 'Chart.defaults.borderColor';

    /**
     * @var string
     */
    public $borderCapStyle = 'butt';

    /**
     * @var array {number[]}
     */
    public $borderDash = [];

    /**
     * @var numeric {number}
     */
    public $borderDashOffset;

    /**
     * @var string {'round'|'bevel'|'miter'}
     */
    public $borderJoinStyle = 'miter';

    /**
     * @var boolean
     */
    public $capBezierPoints = true;

    /**
     * @var string
     */
    public $cubicInterpolationMode = 'default';

    /**
     * @var boolean|string}
     */
    public $fill = false;

    /**
     * @var bool
     */
    public $stepped = false;

    /**
     * @var array
     */
    public $line = [
        'type' => 'line',
        'options' => [
            'legend' => [
                'position' => 'top'
            ],
            'tooltips' => [
                'mode' => 'index'
            ],
            'plugins' => [
                'datalabels' => [
                    'display' => true,
                    'anchor' => 'end',
                    'backgroundColor' => 'function (context) {return context.dataset.backgroundColor;}',
                    'borderRadius' => 4,
                    'color' => 'black',
                    'font' => [
                        'weight' => 'bold',
                        'size' => 8
                    ],
                    'formatter' => 'Math.round',
                ]
            ],
            'layout' => [
                'padding' => [
                    'left' => 10,
                    'right' => 10,
                    'top' => 0,
                    'bottom' => 10
                ]
            ]
        ],
    ];

    /**
     * @param string $type
     * @return $this
     */
    public function type(string $type): LineChartWidget
    {
        $this->type = $type;
        return  $this;
    }

    /**
     * @param float|int|string $tension
     */
    public function tension($tension): LineChartWidget
    {
        $this->tension = $tension;
        return  $this;
    }

    public function backgroundColor(string $backgroundColor): LineChartWidget
    {
        $this->backgroundColor = $backgroundColor;
        return  $this;
    }

    /**
     * @param float|int|string $borderWidth
     */
    public function borderWidth($borderWidth): LineChartWidget
    {
        $this->borderWidth = $borderWidth;
        return  $this;
    }

    public function borderColor(string $borderColor): LineChartWidget
    {
        $this->borderColor = $borderColor;
        return  $this;
    }

    public function borderCapStyle(string $borderCapStyle): LineChartWidget
    {
        $this->borderCapStyle = $borderCapStyle;
        return  $this;
    }

    public function borderDash(array $borderDash): LineChartWidget
    {
        $this->borderDash = $borderDash;
        return  $this;
    }

    /**
     * @param float|int|string $borderDashOffset
     */
    public function borderDashOffset($borderDashOffset): LineChartWidget
    {
        $this->borderDashOffset = $borderDashOffset;
        return  $this;
    }

    public function borderJoinStyle(string $borderJoinStyle): LineChartWidget
    {
        $this->borderJoinStyle = $borderJoinStyle;
        return  $this;
    }

    public function capBezierPoints(bool $capBezierPoints): LineChartWidget
    {
        $this->capBezierPoints = $capBezierPoints;
        return  $this;
    }

    public function cubicInterpolationMode(string $cubicInterpolationMode): LineChartWidget
    {
        $this->cubicInterpolationMode = $cubicInterpolationMode;
        return  $this;
    }

    /**
     * @param bool|string $fill
     */
    public function fill($fill): LineChartWidget
    {
        $this->fill = $fill;
        return  $this;
    }

    public function stepped(bool $stepped): LineChartWidget
    {
        $this->stepped = $stepped;
        return  $this;
    }

    /**
     * @param array $line
     * @return LineChartWidget
     */
    public function line(array $line): LineChartWidget
    {
        $this->line = $line;
        return  $this;
    }
}
