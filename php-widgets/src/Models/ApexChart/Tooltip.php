<?php

namespace Dashboards\Models\ApexChart;

class Tooltip
{
    /**
     * @var bool
     */
    private $enabled = true;
    /**
     * @var string
     */
    private $enabledOnSeries = '';
    /**
     * @var bool
     */
    private $shared = true;
    /**
     * @var bool
     */
    private $followCursor = false;
    /**
     * @var bool
     */
    private $intersect = false;
    /**
     * @var bool
     */
    private $inverseOrder = false;
    /**
     * @var string
     */
    private $custom = '';
    /**
     * @var bool
     */
    private $fillSeriesColor = false;
    /**
     * @var bool
     */
    private $theme = false;
    /**
     * @var string[]
     */
    private $style = [
        'fontSize' => '12px',
        'fontFamily' => ''
    ];
    /**
     * @var false[]
     */
    private $onDatasetHover = ['highlightDataSeries' => false];
    /**
     * @var array
     */
    private $x = [
        'show' => true,
        'format' => 'dd MMM',
        'formatter' => '',
    ];
    /**
     * @var array
     */
    private $y = [
        'formatter' => '',
        'title' => [
            'formatter' => ''
        ]
    ];
    /**
     * @var string[]
     */
    private $z = [
        'formatter' => '',
        'title' => 'Size: '
    ];

    /**
     * @var true[]
     */
    private $marker = ['show' => true];
    /**
     * @var string[]
     */
    private $items = ['display' => 'flex'];

    /**
     * @var array
     */
    private $fixed = [
        'enabled' => false,
        'position' => 'topRight',
        'offsetX' => 0,
        'offsetY' => 0,
    ];

    /**
     * @return array[]
     */
    public function get()
    {
        return [
            'tooltip' => [
                'enabled' => $this->isEnabled(),
                'enabledOnSeries' => $this->getEnabledOnSeries(),
                'shared' => $this->isShared(),
                'followCursor' => $this->isFollowCursor(),
                'intersect' => $this->isIntersect(),
                'inverseOrder' => $this->isInverseOrder(),
                'custom' => $this->getCustom(),
                'fillSeriesColor' => $this->isFillSeriesColor(),
                'theme' => $this->isTheme(),
                'style' => $this->getStyle(),
                'onDatasetHover' => $this->getOnDatasetHover(),
                'x' => $this->getX(),
                'y' => $this->getY(),
                'z' => $this->getZ(),
                'marker' => $this->getMarker(),
                'items' => $this->getItems(),
                'fixed' => $this->getFixed()
            ]
        ];
    }

    /**
     * @return bool
     */
    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    /**
     * @param bool $enabled
     * @return $this
     */
    public function setEnabled(bool $enabled): Tooltip
    {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * @return string
     */
    private function getEnabledOnSeries(): string
    {
        return $this->enabledOnSeries;
    }

    /**
     * @param string $enabledOnSeries
     * @return $this
     */
    public function setEnabledOnSeries(string $enabledOnSeries): Tooltip
    {
        $this->enabledOnSeries = $enabledOnSeries;
        return $this;
    }

    /**
     * @return bool
     */
    public function isShared(): bool
    {
        return $this->shared;
    }

    /**
     * @param bool $shared
     * @return $this
     */
    public function setShared(bool $shared): Tooltip
    {
        $this->shared = $shared;
        return $this;
    }

    /**
     * @return bool
     */
    public function isFollowCursor(): bool
    {
        return $this->followCursor;
    }

    /**
     * @param bool $followCursor
     * @return $this
     */
    public function setFollowCursor(bool $followCursor): Tooltip
    {
        $this->followCursor = $followCursor;
        return $this;
    }

    /**
     * @return bool
     */
    public function isIntersect(): bool
    {
        return $this->intersect;
    }

    /**
     * @param bool $intersect
     * @return $this
     */
    public function setIntersect(bool $intersect): Tooltip
    {
        $this->intersect = $intersect;
        return $this;
    }

    /**
     * @return bool
     */
    public function isInverseOrder(): bool
    {
        return $this->inverseOrder;
    }

    /**
     * @param bool $inverseOrder
     * @return $this
     */
    public function setInverseOrder(bool $inverseOrder): Tooltip
    {
        $this->inverseOrder = $inverseOrder;
        return $this;
    }

    /**
     * @return string
     */
    private function getCustom(): string
    {
        return $this->custom;
    }

    /**
     * @param string $custom
     * @return $this
     */
    public function setCustom(string $custom): Tooltip
    {
        $this->custom = $custom;
        return $this;
    }

    /**
     * @return bool
     */
    public function isFillSeriesColor(): bool
    {
        return $this->fillSeriesColor;
    }

    /**
     * @param bool $fillSeriesColor
     * @return $this
     */
    public function setFillSeriesColor(bool $fillSeriesColor): Tooltip
    {
        $this->fillSeriesColor = $fillSeriesColor;
        return $this;
    }

    /**
     * @return bool
     */
    public function isTheme(): bool
    {
        return $this->theme;
    }

    /**
     * @param bool $theme
     * @return $this
     */
    public function setTheme(bool $theme): Tooltip
    {
        $this->theme = $theme;
        return $this;
    }

    /**
     * @return string[]
     */
    private function getStyle(): array
    {
        return $this->style;
    }

    /**
     * @param array $style
     * @return $this
     */
    public function setStyle(array $style): Tooltip
    {
        $this->style = $style;
        return $this;
    }

    /**
     * @return false[]
     */
    private function getOnDatasetHover(): array
    {
        return $this->onDatasetHover;
    }

    /**
     * @param array $onDatasetHover
     * @return $this
     */
    public function setOnDatasetHover(array $onDatasetHover): Tooltip
    {
        $this->onDatasetHover = $onDatasetHover;
        return $this;
    }

    /**
     * @return array
     */
    private function getX(): array
    {
        return $this->x;
    }

    /**
     * @param array $x
     * @return $this
     */
    public function setX(array $x): Tooltip
    {
        $this->x = $x;
        return $this;
    }

    /**
     * @return array
     */
    private function getY(): array
    {
        return $this->y;
    }

    /**
     * @param array $y
     * @return $this
     */
    public function setY(array $y): Tooltip
    {
        $this->y = $y;
        return $this;
    }

    /**
     * @return string[]
     */
    private function getZ(): array
    {
        return $this->z;
    }

    /**
     * @param array $z
     * @return $this
     */
    public function setZ(array $z): Tooltip
    {
        $this->z = $z;
        return $this;
    }

    /**
     * @return true[]
     */
    private function getMarker(): array
    {
        return $this->marker;
    }

    /**
     * @param array $marker
     * @return $this
     */
    public function setMarker(array $marker): Tooltip
    {
        $this->marker = $marker;
        return $this;
    }

    /**
     * @return string[]
     */
    private function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param array $items
     * @return $this
     */
    public function setItems(array $items): Tooltip
    {
        $this->items = $items;
        return $this;
    }

    /**
     * @return array
     */
    private function getFixed(): array
    {
        return $this->fixed;
    }

    /**
     * @param array $fixed
     * @return $this
     */
    public function setFixed(array $fixed): Tooltip
    {
        $this->fixed = $fixed;
        return $this;
    }
}
