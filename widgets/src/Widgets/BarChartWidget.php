<?php

namespace Dashboards\Widgets;

class BarChartWidget
{
    /**
     * @var string
     */
    protected $type = 'line';

    /**
     * @var {Color}
     */
    protected $backgroundColor = 'Chart.defaults.backgroundColor';

    /**
     * @var numeric
     */
    protected $borderWidth = 0;

    /**
     * @var string
     */
    protected $borderColor = 'Chart.defaults.borderColor';

    /**
     * @var string
     */
    protected $borderSkipped = 'start';

    /**
     * @var numeric|object
     */
    protected $borderRadius = 0;

    /**
     * @var numeric|'auto'
     */
    protected $inflateAmount = 'auto';

    /**
     * @var string
     */
    protected $pointStyle = 'circle';


    public function bar(): array
    {
        return [
            'type' => $this->type ?? 'bar',
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
    }


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
