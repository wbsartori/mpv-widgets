<?php

namespace Dashboards\Models\ApexChart;

class DataLabels
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
     * @var string
     */
    private $textAnchor = 'middle';
    /**
     * @var bool
     */
    private $distributed = false;
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
    private $style = [];
    /**
     * @var array
     */
    private $background = [];
    /**
     * @var array
     */
    private $dropShadow = [];

    /**
     * @return array
     */
    public function get(): array
    {
        return [
            'enabled' => $this->isEnabled(),
            'enabledOnSeries' => $this->getEnabledOnSeries(),
            'textAnchor' => $this->getTextAnchor(),
            'distributed' => $this->isDistributed(),
            'offSetX' => $this->getOffsetX(),
            'offSetY' => $this->getOffsetY(),
            'style' => $this->getStyle(),
            'background' => $this->getBackground(),
            'dropShadow' => $this->getDropShadow(),
        ];
    }

    /**
     * @return bool
     */
    private function isEnabled(): bool
    {
        return $this->enabled;
    }

    /**
     * @param bool $enabled
     * @return DataLabels
     */
    public function setEnabled(bool $enabled): DataLabels
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
     * @return DataLabels
     */
    public function setEnabledOnSeries(string $enabledOnSeries): DataLabels
    {
        $this->enabledOnSeries = $enabledOnSeries;
        return $this;
    }

    /**
     * @return string
     */
    private function getTextAnchor(): string
    {
        return $this->textAnchor;
    }

    /**
     * @param string $textAnchor
     * @return DataLabels
     */
    public function setTextAnchor(string $textAnchor): DataLabels
    {
        $this->textAnchor = $textAnchor;
        return $this;
    }

    /**
     * @return bool
     */
    private function isDistributed(): bool
    {
        return $this->distributed;
    }

    /**
     * @param bool $distributed
     * @return DataLabels
     */
    public function setDistributed(bool $distributed): DataLabels
    {
        $this->distributed = $distributed;
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
     * @return DataLabels
     */
    public function setOffsetX(int $offsetX): DataLabels
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
     * @return DataLabels
     */
    public function setOffsetY(int $offsetY): DataLabels
    {
        $this->offsetY = $offsetY;
        return $this;
    }

    /**
     * @return array
     */
    private function getStyle(): array
    {
        return $this->style;
    }

    /**
     * @param array $style
     * @return DataLabels
     */
    public function setStyle(array $style): DataLabels
    {
        $this->style = $style;
        return $this;
    }

    /**
     * @return array
     */
    private function getBackground(): array
    {
        return $this->background;
    }

    /**
     * @param array $background
     * @return DataLabels
     */
    public function setBackground(array $background): DataLabels
    {
        $this->background = $background;
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
     * @return DataLabels
     */
    public function setDropShadow(array $dropShadow): DataLabels
    {
        $this->dropShadow = $dropShadow;
        return $this;
    }
}