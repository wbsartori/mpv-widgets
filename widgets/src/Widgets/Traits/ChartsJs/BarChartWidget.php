<?php

namespace Dashboards\Widgets\Traits\ChartsJs;

trait BarChartWidget
{
    /**
     * @var string
     */
    public $type = 'line';

    /**
     * @var {Color}
     */
    public $backgroundColor = 'Chart.defaults.backgroundColor';

    /**
     * @var numeric
     */
    public $borderWidth = 0;

    /**
     * @var string
     */
    public $borderColor = 'Chart.defaults.borderColor';

    /**
     * @var string
     */
    public $borderSkipped = 'start';

    /**
     * @var numeric|object
     */
    public $borderRadius = 0;

    /**
     * @var numeric|'auto'
     */
    public $inflateAmount = 'auto';

    /**
     * @var string
     */
    public $pointStyle = 'circle';

    /**
     * @var array
     */
    public $bar = [
        'type' => 'bar',
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

    public function type(string $type): BarChartWidget
    {
        $this->type = $type;
        return $this;
    }

    public function backgroundColor(string $backgroundColor): BarChartWidget
    {
        $this->backgroundColor = $backgroundColor;
        return $this;
    }

    /**
     * @param float|int|string $borderWidth
     * @return BarChartWidget
     */
    public function borderWidth($borderWidth): BarChartWidget
    {
        $this->borderWidth = $borderWidth;
        return $this;
    }

    public function borderColor(string $borderColor): BarChartWidget
    {
        $this->borderColor = $borderColor;
        return $this;
    }

    public function borderSkipped(string $borderSkipped): BarChartWidget
    {
        $this->borderSkipped = $borderSkipped;
        return $this;
    }

    /**
     * @param float|int|object|string $borderRadius
     * @return BarChartWidget
     */
    public function borderRadius($borderRadius): BarChartWidget
    {
        $this->borderRadius = $borderRadius;
        return $this;
    }

    /**
     * @param float|int|string $inflateAmount
     * @return BarChartWidget
     */
    public function inflateAmount($inflateAmount): BarChartWidget
    {
        $this->inflateAmount = $inflateAmount;
        return $this;
    }

    public function pointStyle(string $pointStyle): BarChartWidget
    {
        $this->pointStyle = $pointStyle;
        return $this;
    }
}
