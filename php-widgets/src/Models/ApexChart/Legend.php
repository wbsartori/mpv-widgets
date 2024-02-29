<?php

namespace Dashboards\Models\ApexChart;

class Legend
{
    /**
     * @var bool
     */
    private $show = true;
    /**
     * @var bool
     */
    private $showForSingleSeries = false;
    /**
     * @var bool
     */
    private $showForNullSeries = true;
    /**
     * @var bool
     */
    private $showForZeroSeries = true;
    /**
     * @var string
     */
    private $position = 'bottom';
    /**
     * @var string
     */
    private $horizontalAlign = 'center';
    /**
     * @var bool
     */
    private $floating = false;
    /**
     * @var string
     */
    private $fontSize = '14px';
    /**
     * @var string
     */
    private $fontFamily = 'Helvetica; Arial';
    /**
     * @var int
     */
    private $fontWeight = 400;
    /**
     * @var string
     */
    private $formatter = '';
    /**
     * @var bool
     */
    private $inverseOrder = false;
    /**
     * @var string
     */
    private $width = '';
    /**
     * @var string
     */
    private $height = '';
    /**
     * @var string
     */
    private $tooltipHoverFormatter = '';
    /**
     * @var array
     */
    private $customLegendItems = [];
    /**
     * @var int
     */
    private $offsetX = 0;
    /**
     * @var int
     */
    private $offsetY = 0;
    /**
     * @var array
     */
    private $labels = [
        'colors' => 'undefined',
        'useSeriesColors' => false
    ];
    /**
     * @var int[]
     */
    private $markers = [
        'width' => 12,
        'height' => 12,
        'strokeWidth' => 0,
        'strokeColor' => '#fff',
        'fillColors' => '',
        'radius' => 12,
        'customHTML' => '',
        'onClick' => '',
        'offsetX' => 0,
        'offsetY' => 0
    ];
    /**
     * @var int[]
     */
    private $itemMargin = [
        'horizontal' => 5,
        'vertical' => 0
    ];
    /**
     * @var true[]
     */
    private
        $onItemClick = [
        'toggleDataSeries' => true
    ];
    /**
     * @var true[]
     */
    private $onItemHover = [
        'highlightDataSeries' => true
    ];

    /**
     * @return array
     */
    public function get(): array
    {
        return [
            'legend' => [
                'show' => $this->isShow(),
                'showForSingleSeries' => $this->isShowForSingleSeries(),
                'showForNullSeries' => $this->isShowForNullSeries(),
                'showForZeroSeries' => $this->isShowForZeroSeries(),
                'position' => $this->getPosition(),
                'horizontalAlign' => $this->getHorizontalAlign(),
                'floating' => $this->isFloating(),
                'fontSize' => $this->getFontSize(),
                'fontFamily' => $this->getFontFamily(),
                'fontWeight' => $this->getFontWeight(),
                'formatter' => $this->getFormatter(),
                'inverseOrder' => $this->isInverseOrder(),
                'width' => $this->getWidth(),
                'height' => $this->getHeight(),
                'tooltipHoverFormatter' => $this->getTooltipHoverFormatter(),
                'customLegendItems' => $this->getCustomLegendItems(),
                'offsetX' => $this->getOffsetX(),
                'offsetY' => $this->getOffsetY(),
                'labels' => $this->getLabels(),
                'markers' => $this->getMarkers(),
                'itemMargin' => $this->getItemMargin(),
                'onItemClick' => $this->getOnItemClick(),
                'onItemHover' => $this->getOnItemHover()
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
    public function setShow(bool $show): Legend
    {
        $this->show = $show;
        return $this;
    }

    /**
     * @return bool
     */
    private function isShowForSingleSeries(): bool
    {
        return $this->showForSingleSeries;
    }

    /**
     * @param bool $showForSingleSeries
     * @return $this
     */
    public function setShowForSingleSeries(bool $showForSingleSeries): Legend
    {
        $this->showForSingleSeries = $showForSingleSeries;
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
    public function setShowForNullSeries(bool $showForNullSeries): Legend
    {
        $this->showForNullSeries = $showForNullSeries;
        return $this;
    }

    /**
     * @return bool
     */
    private function isShowForZeroSeries(): bool
    {
        return $this->showForZeroSeries;
    }

    /**
     * @param bool $showForZeroSeries
     * @return $this
     */
    public function setShowForZeroSeries(bool $showForZeroSeries): Legend
    {
        $this->showForZeroSeries = $showForZeroSeries;
        return $this;
    }

    /**
     * @return string
     */
    private function getPosition(): string
    {
        return $this->position;
    }

    /**
     * @param string $position
     * @return $this
     */
    public function setPosition(string $position): Legend
    {
        $this->position = $position;
        return $this;
    }

    /**
     * @return string
     */
    private function getHorizontalAlign(): string
    {
        return $this->horizontalAlign;
    }

    /**
     * @param string $horizontalAlign
     * @return Legend
     */
    private function setHorizontalAlign(string $horizontalAlign): Legend
    {
        $this->horizontalAlign = $horizontalAlign;
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
    public function setFloating(bool $floating): Legend
    {
        $this->floating = $floating;
        return $this;
    }

    /**
     * @return string
     */
    private function getFontSize(): string
    {
        return $this->fontSize;
    }

    /**
     * @param string $fontSize
     * @return $this
     */
    public function setFontSize(string $fontSize): Legend
    {
        $this->fontSize = $fontSize;
        return $this;
    }

    /**
     * @return string
     */
    private function getFontFamily(): string
    {
        return $this->fontFamily;
    }

    /**
     * @param string $fontFamily
     * @return $this
     */
    public function setFontFamily(string $fontFamily): Legend
    {
        $this->fontFamily = $fontFamily;
        return $this;
    }

    /**
     * @return int
     */
    private function getFontWeight(): int
    {
        return $this->fontWeight;
    }

    /**
     * @param int $fontWeight
     * @return $this
     */
    public function setFontWeight(int $fontWeight): Legend
    {
        $this->fontWeight = $fontWeight;
        return $this;
    }

    /**
     * @return string
     */
    private function getFormatter(): string
    {
        return $this->formatter;
    }

    /**
     * @param string $formatter
     * @return $this
     */
    public function setFormatter(string $formatter): Legend
    {
        $this->formatter = $formatter;
        return $this;
    }

    /**
     * @return bool
     */
    private function isInverseOrder(): bool
    {
        return $this->inverseOrder;
    }

    /**
     * @param bool $inverseOrder
     * @return $this
     */
    public function setInverseOrder(bool $inverseOrder): Legend
    {
        $this->inverseOrder = $inverseOrder;
        return $this;
    }

    /**
     * @return string
     */
    private function getWidth(): string
    {
        return $this->width;
    }

    /**
     * @param string $width
     * @return $this
     */
    public function setWidth(string $width): Legend
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return string
     */
    private function getHeight(): string
    {
        return $this->height;
    }

    /**
     * @param string $height
     * @return $this
     */
    public function setHeight(string $height): Legend
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return string
     */
    private function getTooltipHoverFormatter(): string
    {
        return $this->tooltipHoverFormatter;
    }

    /**
     * @param string $tooltipHoverFormatter
     * @return $this
     */
    public function setTooltipHoverFormatter(string $tooltipHoverFormatter): Legend
    {
        $this->tooltipHoverFormatter = $tooltipHoverFormatter;
        return $this;
    }

    /**
     * @return array
     */
    private function getCustomLegendItems(): array
    {
        return $this->customLegendItems;
    }

    /**
     * @param array $customLegendItems
     * @return $this
     */
    public function setCustomLegendItems(array $customLegendItems): Legend
    {
        $this->customLegendItems = $customLegendItems;
        return $this;
    }

    /**
     * @return int
     */
    private function getOffsetX(): int
    {
        return $this->offsetX;
    }

    /**
     * @param int $offsetX
     * @return $this
     */
    public function setOffsetX(int $offsetX): Legend
    {
        $this->offsetX = $offsetX;
        return $this;
    }

    /**
     * @return int
     */
    private function getOffsetY(): int
    {
        return $this->offsetY;
    }

    /**
     * @param int $offsetY
     * @return $this
     */
    public function setOffsetY(int $offsetY): Legend
    {
        $this->offsetY = $offsetY;
        return $this;
    }

    /**
     * @return array
     */
    private function getLabels(): array
    {
        return $this->labels;
    }

    /**
     * @param array $labels
     * @return $this
     */
    public function setLabels(array $labels): Legend
    {
        $this->labels = $labels;
        return $this;
    }

    /**
     * @return int[]
     */
    private function getMarkers(): array
    {
        return $this->markers;
    }

    /**
     * @param array $markers
     * @return $this
     */
    public function setMarkers(array $markers): Legend
    {
        $this->markers = $markers;
        return $this;
    }

    /**
     * @return int[]
     */
    private function getItemMargin(): array
    {
        return $this->itemMargin;
    }

    /**
     * @param array $itemMargin
     * @return $this
     */
    public function setItemMargin(array $itemMargin): Legend
    {
        $this->itemMargin = $itemMargin;
        return $this;
    }

    /**
     * @return true[]
     */
    private function getOnItemClick(): array
    {
        return $this->onItemClick;
    }

    /**
     * @param array $onItemClick
     * @return $this
     */
    public function setOnItemClick(array $onItemClick): Legend
    {
        $this->onItemClick = $onItemClick;
        return $this;
    }

    /**
     * @return true[]
     */
    private function getOnItemHover(): array
    {
        return $this->onItemHover;
    }

    /**
     * @param array $onItemHover
     * @return $this
     */
    public function setOnItemHover(array $onItemHover): Legend
    {
        $this->onItemHover = $onItemHover;
        return $this;
    }
}
