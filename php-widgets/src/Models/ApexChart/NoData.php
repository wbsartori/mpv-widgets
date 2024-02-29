<?php

namespace Dashboards\Models\ApexChart;

class NoData
{
    /**
     * @var string
     */
    private $text = '';
    /**
     * @var string
     */
    private $align = 'center';
    /**
     * @var string
     */
    private $verticalAlign = 'middle';
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
     * @return array
     */
    public function get(): array
    {
        return [
            'noData' => [
                'text' => $this->getText(),
                'align' => $this->getAlign(),
                'verticalAlign' => $this->getVerticalAlign(),
                'offsetX' => $this->getOffsetX(),
                'offsetY' => $this->getOffsetY(),
                'style' => $this->getStyle()
            ]
        ];
    }

    /**
     * @return string
     */
    private function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     * @return $this
     */
    public function setText(string $text): NoData
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return string
     */
    private function getAlign(): string
    {
        return $this->align;
    }

    /**
     * @param string $align
     * @return $this
     */
    public function setAlign(string $align): NoData
    {
        $this->align = $align;
        return $this;
    }

    /**
     * @return string
     */
    private function getVerticalAlign(): string
    {
        return $this->verticalAlign;
    }

    /**
     * @param string $verticalAlign
     * @return $this
     */
    public function setVerticalAlign(string $verticalAlign): NoData
    {
        $this->verticalAlign = $verticalAlign;
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
    public function setOffsetX(int $offsetX): NoData
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
    public function setOffsetY(int $offsetY): NoData
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
     * @return $this
     */
    public function setStyle(array $style): NoData
    {
        $this->style = $style;
        return $this;
    }
}
