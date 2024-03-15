<?php

namespace Dashboards\Widgets;

class LineChartWidget
{
    /**
     * @var string
     */
    protected $type = 'line';

    /**
     * @var numeric
     */
    protected $tension = 0;

    /**
     * @var {Color}
     */
    protected $backgroundColor = 'Chart.defaults.backgroundColor';

    /**
     * @var numeric
     */
    protected $borderWidth = 3;

    /**
     * @var {Color}
     */
    protected $borderColor = 'Chart.defaults.borderColor';

    /**
     * @var string
     */
    protected $borderCapStyle = 'butt';

    /**
     * @var array {number[]}
     */
    protected $borderDash = [];

    /**
     * @var numeric {number}
     */
    protected $borderDashOffset;

    /**
     * @var string {'round'|'bevel'|'miter'}
     */
    protected $borderJoinStyle = 'miter';

    /**
     * @var boolean
     */
    protected $capBezierPoints = true;

    /**
     * @var string
     */
    protected $cubicInterpolationMode = 'default';

    /**
     * @var boolean|string}
     */
    protected $fill = false;

    /**
     * @var bool
     */
    protected $stepped = false;

    /**
     * @var array
     */
    protected $line = [
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
