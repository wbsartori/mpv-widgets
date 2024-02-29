<?php

namespace Dashboards\Models\ApexChart;

use Dashboards\Widgets\Abstracts\ModelInterface;

class Chart implements ModelInterface
{
    /**
     * @var string
     */
    private $background = '';
    /**
     * @var array
     */
    private $brush = [];
    /**
     * @var string
     */
    private $defaultLocale = '';
    /**
     * @var array
     */
    private $dropShadow = [];
    /**
     * @var string
     */
    private $fontFamily = '';
    /**
     * @var string
     */
    private $foreColor = '';
    /**
     * @var string
     */
    private $group = '';
    /**
     * @var string
     */
    private $height = '';
    /**
     * @var string
     */
    private $id = '';
    /**
     * @var array
     */
    private $locales = [];
    /**
     * @var int
     */
    private $offsetX = 0;
    /**
     * @var int
     */
    private $offsetY = 0;
    /**
     * @var int
     */
    private $parentHeightOffset = 0;
    /**
     * @var bool
     */
    private $redrawOnParentResize = true;
    /**
     * @var bool
     */
    private $redrawOnWindowResize = true;
    /**
     * @var array
     */
    private $selection = [];
    /**
     * @var array
     */
    private $sparkline = [];
    /**
     * @var bool
     */
    private $stacked = false;
    /**
     * @var string
     */
    private $stackType = '';
    /**
     * @var array
     */
    private $toolbar = [];
    /**
     * @var string
     */
    private $type = '';
    /**
     * @var string
     */
    private $width = '';
    /**
     * @var array
     */
    private $zoom = [];

    /**
     * @var array
     */
    private $animations = [];

    /**
     * @return array
     */
    public function get(): array
    {
        $chart = [
            'animations' => $this->getAnimations(),
            'background' => $this->getBackground(),
            'brush' => $this->getBrush(),
            'defaultLocale' => $this->getDefaultLocale(),
            'dropShadow' => $this->getDropShadow(),
            'fontFamily' => $this->getFontFamily(),
            'foreColor' => $this->getForeColor(),
            'group' => $this->getGroup(),
            'height' => $this->getHeight(),
            'id' => $this->getId(),
            'locales' => $this->getLocales(),
            'offsetX' => $this->getOffsetX(),
            'offsetY' => $this->getOffsetY(),
            'parentHeightOffset' => $this->getParentHeightOffset(),
            'redrawOnParentResize' => $this->isRedrawOnParentResize(),
            'redrawOnWindowResize' => $this->isRedrawOnWindowResize(),
            'selection' => $this->getSelection(),
            'sparkline' => $this->getSparkline(),
            'stacked' => $this->isStacked(),
            'stackType' => $this->getStackType(),
            'toolbar' => $this->getToolbar(),
            'type' => $this->getType(),
            'width' => $this->getWidth(),
            'zoom' => $this->getZoom()
        ];

        return array_filter($chart);
    }

    /**
     * @return array
     */
    private function getAnimations(): array
    {
        return $this->animations;
    }

    /**
     * @param array $animations
     * @return $this
     */
    public function setAnimations(array $animations): Chart
    {
        $this->animations = $animations;
        return $this;
    }

    /**
     * @return string
     */
    private function getBackground(): string
    {
        return $this->background;
    }

    /**
     * @param string $background
     * @return $this
     */
    public function setBackground(string $background): Chart
    {
        $this->background = $background;
        return $this;
    }

    /**
     * @return array
     */
    private function getBrush(): array
    {
        return $this->brush;
    }

    /**
     * @param array $brush
     * @return $this
     */
    public function setBrush(array $brush): Chart
    {
        $this->brush = $brush;
        return $this;
    }

    /**
     * @return string
     */
    private function getDefaultLocale(): string
    {
        return $this->defaultLocale;
    }

    /**
     * @param string $defaultLocale
     * @return $this
     */
    public function setDefaultLocale(string $defaultLocale): Chart
    {
        $this->defaultLocale = $defaultLocale;
        return $this;
    }

    /**
     * @return array
     */
    private function getDropShadow(): array
    {
        return $this->dropShadow;
    }

    /**
     * @param array $dropShadow
     * @return $this
     */
    public function setDropShadow(array $dropShadow): Chart
    {
        $this->dropShadow = $dropShadow;
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
    public function setFontFamily(string $fontFamily): Chart
    {
        $this->fontFamily = $fontFamily;
        return $this;
    }

    /**
     * @return string
     */
    private function getForeColor(): string
    {
        return $this->foreColor;
    }

    /**
     * @param string $foreColor
     * @return $this
     */
    public function setForeColor(string $foreColor): Chart
    {
        $this->foreColor = $foreColor;
        return $this;
    }

    /**
     * @return string
     */
    private function getGroup(): string
    {
        return $this->group;
    }

    /**
     * @param string $group
     * @return $this
     */
    public function setGroup(string $group): Chart
    {
        $this->group = $group;
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
    public function setHeight(string $height): Chart
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return string
     */
    private function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return $this
     */
    public function setId(string $id): Chart
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return array
     */
    private function getLocales(): array
    {
        return $this->locales;
    }

    /**
     * @param array $locales
     * @return $this
     */
    public function setLocales(array $locales): Chart
    {
        $this->locales = $locales;
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
    public function setOffsetX(int $offsetX): Chart
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
    public function setOffsetY(int $offsetY): Chart
    {
        $this->offsetY = $offsetY;
        return $this;
    }

    /**
     * @return int
     */
    private function getParentHeightOffset(): int
    {
        return $this->parentHeightOffset;
    }

    /**
     * @param int $parentHeightOffset
     * @return $this
     */
    public function setParentHeightOffset(int $parentHeightOffset): Chart
    {
        $this->parentHeightOffset = $parentHeightOffset;
        return $this;
    }

    /**
     * @return bool
     */
    private function isRedrawOnParentResize(): bool
    {
        return $this->redrawOnParentResize;
    }

    /**
     * @param bool $redrawOnParentResize
     * @return $this
     */
    public function setRedrawOnParentResize(bool $redrawOnParentResize): Chart
    {
        $this->redrawOnParentResize = $redrawOnParentResize;
        return $this;
    }

    /**
     * @return bool
     */
    private function isRedrawOnWindowResize(): bool
    {
        return $this->redrawOnWindowResize;
    }

    /**
     * @param bool $redrawOnWindowResize
     * @return $this
     */
    public function setRedrawOnWindowResize(bool $redrawOnWindowResize): Chart
    {
        $this->redrawOnWindowResize = $redrawOnWindowResize;
        return $this;
    }

    /**
     * @return array
     */
    private function getSelection(): array
    {
        return $this->selection;
    }

    /**
     * @param array $selection
     * @return $this
     */
    public function setSelection(array $selection): Chart
    {
        $this->selection = $selection;
        return $this;
    }

    /**
     * @return array
     */
    private function getSparkline(): array
    {
        return $this->sparkline;
    }

    /**
     * @param array $sparkline
     * @return $this
     */
    public function setSparkline(array $sparkline): Chart
    {
        $this->sparkline = $sparkline;
        return $this;
    }

    /**
     * @return bool
     */
    private function isStacked(): bool
    {
        return $this->stacked;
    }

    /**
     * @param bool $stacked
     * @return $this
     */
    public function setStacked(bool $stacked): Chart
    {
        $this->stacked = $stacked;
        return $this;
    }

    /**
     * @return string
     */
    private function getStackType(): string
    {
        return $this->stackType;
    }

    /**
     * @param string $stackType
     * @return $this
     */
    public function setStackType(string $stackType): Chart
    {
        $this->stackType = $stackType;
        return $this;
    }

    /**
     * @return array
     */
    private function getToolbar(): array
    {
        return $this->toolbar;
    }

    /**
     * @param array $toolbar
     * @return $this
     */
    public function setToolbar(array $toolbar): Chart
    {
        $this->toolbar = $toolbar;
        return $this;
    }

    /**
     * @return string
     */
    private function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return $this
     */
    public function setType(string $type): Chart
    {
        $this->type = $type;
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
    public function setWidth(string $width): Chart
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return array
     */
    private function getZoom(): array
    {
        return $this->zoom;
    }

    /**
     * @param array $zoom
     * @return $this
     */
    public function setZoom(array $zoom): Chart
    {
        $this->zoom = $zoom;
        return $this;
    }
}
