<?php

namespace Dashboards\Models\ApexChart;

class Fill
{
    /**
     * @var array
     */
    private $colors = [];
    /**
     * @var float
     */
    private $opacity = 0.9;
    /**
     * @var string
     */
    private $type = 'solid';
    /**
     * @var array
     */
    private $gradient = [];
    /**
     * @var array
     */
    private $image = [];
    /**
     * @var array
     */
    private $pattern = [];

    /**
     * @return array
     */
    public function get(): array
    {
        return [
            'fill' => [
                'colors' => $this->getColors(),
                'opacity' => $this->getOpacity(),
                'type' => $this->getType(),
                'gradient' => $this->getGradient(),
                'pattern' => $this->getPattern(),
            ]
        ];
    }

    /**
     * @return array
     */
    public function getColors(): array
    {
        return $this->colors;
    }

    /**
     * @param array $colors
     * @return Fill
     */
    private function setColors(array $colors): Fill
    {
        $this->colors = $colors;
        return $this;
    }

    /**
     * @return float
     */
    public function getOpacity(): float
    {
        return $this->opacity;
    }

    /**
     * @param float $opacity
     * @return Fill
     */
    private function setOpacity(float $opacity): Fill
    {
        $this->opacity = $opacity;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return Fill
     */
    private function setType(string $type): Fill
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return array
     */
    public function getGradient(): array
    {
        return $this->gradient;
    }

    /**
     * @param array $gradient
     * @return Fill
     */
    private function setGradient(array $gradient): Fill
    {
        $this->gradient = $gradient;
        return $this;
    }

    /**
     * @return array
     */
    public function getImage(): array
    {
        return $this->image;
    }

    /**
     * @param array $image
     * @return Fill
     */
    private function setImage(array $image): Fill
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return array
     */
    private function getPattern(): array
    {
        return $this->pattern;
    }

    /**
     * @param array $pattern
     * @return $this
     */
    public function setPattern(array $pattern): Fill
    {
        $this->pattern = $pattern;
        return $this;
    }
}
