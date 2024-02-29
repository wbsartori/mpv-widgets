<?php

namespace Dashboards\Models\ApexChart;

class Title
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
     * @var int
     */
    private $margin = 10;
    /**
     * @var int
     */
    private $offsetX = 0;
    /**
     * @var int
     */
    private $offsetY = 0;
    /**
     * @var bool
     */
    private $floating = false;
    /**
     * @var string[]
     */
    private $style = [
        'fontSize' => '14px',
        'fontWeight' => 'bold',
        'fontFamily' => '',
        'color' => '#263238'
    ];

    /**
     * @return array[]
     */
    public function get(): array
    {
        return [
            'text' => $this->getText(),
            'align' => $this->getAlign(),
            'margin' => $this->getMargin(),
            'offsetX' => $this->getOffsetX(),
            'offsetY' => $this->getOffsetY(),
            'floating' => $this->isFloating(),
            'style' => $this->getStyle()
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
    public function setText(string $text): Title
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
    public function setAlign(string $align): Title
    {
        $this->align = $align;
        return $this;
    }

    /**
     * @return int
     */
    private function getMargin(): int
    {
        return $this->margin;
    }

    /**
     * @param int $margin
     * @return $this
     */
    public function setMargin(int $margin): Title
    {
        $this->margin = $margin;
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
    public function setOffsetX(int $offsetX): Title
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
    public function setOffsetY(int $offsetY): Title
    {
        $this->offsetY = $offsetY;
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
    public function setFloating(bool $floating): Title
    {
        $this->floating = $floating;
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
    public function setStyle(array $style): Title
    {
        $this->style = $style;
        return $this;
    }
}
