<?php

namespace Dashboards\Models\ApexChart;

class Yaxis
{
    /**
     * @var bool
     */
    private $show = true;
    /**
     * @var bool
     */
    private $showAlways = true;
    /**
     * @var bool
     */
    private $showForNullSeries = true;
    /**
     * @var string
     */
    private $seriesName = '';
    /**
     * @var bool
     */
    private $opposite = false;
    /**
     * @var bool
     */
    private $reversed = false;
    /**
     * @var bool
     */
    private $logarithmic = false;
    /**
     * @var int
     */
    private $logBase = 10;
    /**
     * @var int
     */
    private $tickAmount = 6;
    /**
     * @var int
     */
    private $min = 6;
    /**
     * @var int
     */
    private $max = 6;
    /**
     * @var bool
     */
    private $forceNiceScale = false;
    /**
     * @var bool
     */
    private $floating = false;
    /**
     * @var string
     */
    private $decimalsInFloat = '';
    /**
     * @var array
     */
    private $labels = [];
    /**
     * @var array
     */
    private $axisBorder = [];
    /**
     * @var array
     */
    private $axisTicks = [];
    /**
     * @var array
     */
    private $title = [];
    /**
     * @var array
     */
    private $crosshairs = [];
    /**
     * @var array
     */
    private $tooltip = [];

    /**
     * @return array[]
     */
    public function get(): array
    {
        return [
            'yaxis' => [
                'show' => $this->isShow(),
                'showAlways' => $this->isShowAlways(),
                'showForNullSeries' => $this->isShowForNullSeries(),
                'seriesName' => $this->getSeriesName(),
                'opposite' => $this->isOpposite(),
                'reversed' => $this->isReversed(),
                'logarithmic' => $this->isLogarithmic(),
                'logBase' => $this->getLogBase(),
                'tickAmount' => $this->getTickAmount(),
                'min' => $this->getMin(),
                'max' => $this->getMax(),
                'forceNiceScale' => $this->isForceNiceScale(),
                'floating' => $this->isFloating(),
                'decimalsInFloat' => $this->getDecimalsInFloat(),
                'labels' => $this->getLabels(),
                'axisBorder' => $this->getAxisBorder(),
                'axisTicks' => $this->getAxisTicks(),
                'title' => $this->getTitle(),
                'crosshairs' => $this->getCrosshairs(),
                'tooltip' => $this->getTooltip()
            ]
        ];
    }

    /**
     * @return bool
     */
    private function isShow(): bool
    {
        return $this->show;
    }

    /**
     * @param bool $show
     * @return $this
     */
    public function setShow(bool $show): Yaxis
    {
        $this->show = $show;
        return $this;
    }

    /**
     * @return bool
     */
    private function isShowAlways(): bool
    {
        return $this->showAlways;
    }

    /**
     * @param bool $showAlways
     * @return $this
     */
    public function setShowAlways(bool $showAlways): Yaxis
    {
        $this->showAlways = $showAlways;
        return $this;
    }

    /**
     * @return bool
     */
    private function isShowForNullSeries(): bool
    {
        return $this->showForNullSeries;
    }

    /**
     * @param bool $showForNullSeries
     * @return $this
     */
    public function setShowForNullSeries(bool $showForNullSeries): Yaxis
    {
        $this->showForNullSeries = $showForNullSeries;
        return $this;
    }

    /**
     * @return string
     */
    public function getSeriesName(): string
    {
        return $this->seriesName;
    }

    /**
     * @param string $seriesName
     * @return $this
     */
    public function setSeriesName(string $seriesName): Yaxis
    {
        $this->seriesName = $seriesName;
        return $this;
    }

    /**
     * @return bool
     */
    private function isOpposite(): bool
    {
        return $this->opposite;
    }

    /**
     * @param bool $opposite
     * @return $this
     */
    public function setOpposite(bool $opposite): Yaxis
    {
        $this->opposite = $opposite;
        return $this;
    }

    /**
     * @return bool
     */
    private function isReversed(): bool
    {
        return $this->reversed;
    }

    /**
     * @param bool $reversed
     * @return $this
     */
    public function setReversed(bool $reversed): Yaxis
    {
        $this->reversed = $reversed;
        return $this;
    }

    /**
     * @return bool
     */
    private function isLogarithmic(): bool
    {
        return $this->logarithmic;
    }

    /**
     * @param bool $logarithmic
     * @return $this
     */
    public function setLogarithmic(bool $logarithmic): Yaxis
    {
        $this->logarithmic = $logarithmic;
        return $this;
    }

    /**
     * @return int
     */
    public function getLogBase(): int
    {
        return $this->logBase;
    }

    /**
     * @param int $logBase
     * @return $this
     */
    public function setLogBase(int $logBase): Yaxis
    {
        $this->logBase = $logBase;
        return $this;
    }

    /**
     * @return int
     */
    public function getTickAmount(): int
    {
        return $this->tickAmount;
    }

    /**
     * @param int $tickAmount
     * @return $this
     */
    public function setTickAmount(int $tickAmount): Yaxis
    {
        $this->tickAmount = $tickAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getMin(): int
    {
        return $this->min;
    }

    /**
     * @param int $min
     * @return $this
     */
    public function setMin(int $min): Yaxis
    {
        $this->min = $min;
        return $this;
    }

    /**
     * @return int
     */
    public function getMax(): int
    {
        return $this->max;
    }

    /**
     * @param int $max
     * @return $this
     */
    public function setMax(int $max): Yaxis
    {
        $this->max = $max;
        return $this;
    }

    /**
     * @return bool
     */
    private function isForceNiceScale(): bool
    {
        return $this->forceNiceScale;
    }

    /**
     * @param bool $forceNiceScale
     * @return $this
     */
    public function setForceNiceScale(bool $forceNiceScale): Yaxis
    {
        $this->forceNiceScale = $forceNiceScale;
        return $this;
    }

    /**
     * @return bool
     */
    private function isFloating(): bool
    {
        return $this->floating;
    }

    /**
     * @param bool $floating
     * @return $this
     */
    public function setFloating(bool $floating): Yaxis
    {
        $this->floating = $floating;
        return $this;
    }

    /**
     * @return string
     */
    public function getDecimalsInFloat(): string
    {
        return $this->decimalsInFloat;
    }

    /**
     * @param string $decimalsInFloat
     * @return $this
     */
    public function setDecimalsInFloat(string $decimalsInFloat): Yaxis
    {
        $this->decimalsInFloat = $decimalsInFloat;
        return $this;
    }

    /**
     * @return array
     */
    public function getLabels(): array
    {
        return $this->labels;
    }

    /**
     * @param array $labels
     * @return $this
     */
    public function setLabels(array $labels): Yaxis
    {
        $this->labels = $labels;
        return $this;
    }

    /**
     * @return array
     */
    private function getAxisBorder(): array
    {
        return $this->axisBorder;
    }

    /**
     * @param array $axisBorder
     * @return $this
     */
    public function setAxisBorder(array $axisBorder): Yaxis
    {
        $this->axisBorder = $axisBorder;
        return $this;
    }

    /**
     * @return array
     */
    private function getAxisTicks(): array
    {
        return $this->axisTicks;
    }

    /**
     * @param array $axisTicks
     * @return $this
     */
    public function setAxisTicks(array $axisTicks): Yaxis
    {
        $this->axisTicks = $axisTicks;
        return $this;
    }

    /**
     * @return array
     */
    public function getTitle(): array
    {
        return $this->title;
    }

    /**
     * @param array $title
     * @return $this
     */
    public function setTitle(array $title): Yaxis
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return array
     */
    public function getCrosshairs(): array
    {
        return $this->crosshairs;
    }

    /**
     * @param array $crosshairs
     * @return $this
     */
    public function setCrosshairs(array $crosshairs): Yaxis
    {
        $this->crosshairs = $crosshairs;
        return $this;
    }

    /**
     * @return array
     */
    public function getTooltip(): array
    {
        return $this->tooltip;
    }

    /**
     * @param array $tooltip
     * @return $this
     */
    public function setTooltip(array $tooltip): Yaxis
    {
        $this->tooltip = $tooltip;
        return $this;
    }
}
