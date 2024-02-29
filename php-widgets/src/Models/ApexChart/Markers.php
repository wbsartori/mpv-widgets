<?php

namespace Dashboards\Models\ApexChart;

class Markers
{
    private $size = 0;
    private $colors = [];
    private $strokeColors = '#fff';
    private $strokeWidth = 2;
    private $strokeOpacity = 0.9;
    private $strokeDashArray = 0;
    private $fillOpacity = 1;
    private $discrete = [];
    private $shape = "circle";
    private $radius = 2;
    private $offsetX = 0;
    private $offsetY = 0;
    private $showNullDataPoints = true;
    private $hover = [];

    /**
     * @return array
     */
    public function get(): array
    {
        return [
            'markers' => [
                'size' => $this->getSize(),
                'colors' => $this->getColors(),
                'strokeColors' => $this->getStrokeColors(),
                'strokeWidth' => $this->getStrokeWidth(),
                'strokeOpacity' => $this->getStrokeOpacity(),
                'strokeDashArray' => $this->getStrokeDashArray(),
                'fillOpacity' => $this->getFillOpacity(),
                'discrete' => $this->getDiscrete(),
                'shape' => $this->getShape(),
                'radius' => $this->getRadius(),
                'offsetX' => $this->getOffsetX(),
                'offsetY' => $this->getOffsetY(),
                'showNullDataPoints' => $this->isShowNullDataPoints(),
                'hover' => $this->getHover()
            ]
        ];
    }

    private function getSize(): int
    {
        return $this->size;
    }

    public function setSize(int $size): Markers
    {
        $this->size = $size;
        return $this;
    }

    private function getColors(): array
    {
        return $this->colors;
    }

    public function setColors(array $colors): Markers
    {
        $this->colors = $colors;
        return $this;
    }

    private function getStrokeColors(): string
    {
        return $this->strokeColors;
    }

    public function setStrokeColors(string $strokeColors): Markers
    {
        $this->strokeColors = $strokeColors;
        return $this;
    }

    private function getStrokeWidth(): int
    {
        return $this->strokeWidth;
    }

    public function setStrokeWidth(int $strokeWidth): Markers
    {
        $this->strokeWidth = $strokeWidth;
        return $this;
    }

    private function getStrokeOpacity(): float
    {
        return $this->strokeOpacity;
    }

    public function setStrokeOpacity(float $strokeOpacity): Markers
    {
        $this->strokeOpacity = $strokeOpacity;
        return $this;
    }

    private function getStrokeDashArray(): int
    {
        return $this->strokeDashArray;
    }

    public function setStrokeDashArray(int $strokeDashArray): Markers
    {
        $this->strokeDashArray = $strokeDashArray;
        return $this;
    }

    private function getFillOpacity(): int
    {
        return $this->fillOpacity;
    }

    public function setFillOpacity(int $fillOpacity): Markers
    {
        $this->fillOpacity = $fillOpacity;
        return $this;
    }

    private function getDiscrete(): array
    {
        return $this->discrete;
    }

    public function setDiscrete(array $discrete): Markers
    {
        $this->discrete = $discrete;
        return $this;
    }

    private function getShape(): string
    {
        return $this->shape;
    }

    public function setShape(string $shape): Markers
    {
        $this->shape = $shape;
        return $this;
    }

    private function getRadius(): int
    {
        return $this->radius;
    }

    public function setRadius(int $radius): Markers
    {
        $this->radius = $radius;
        return $this;
    }

    private function getOffsetX(): int
    {
        return $this->offsetX;
    }

    public function setOffsetX(int $offsetX): Markers
    {
        $this->offsetX = $offsetX;
        return $this;
    }

    private function getOffsetY(): int
    {
        return $this->offsetY;
    }

    public function setOffsetY(int $offsetY): Markers
    {
        $this->offsetY = $offsetY;
        return $this;
    }

    public function isShowNullDataPoints(): bool
    {
        return $this->showNullDataPoints;
    }

    public function setShowNullDataPoints(bool $showNullDataPoints): Markers
    {
        $this->showNullDataPoints = $showNullDataPoints;
        return $this;
    }

    private function getHover(): array
    {
        return $this->hover;
    }

    public function setHover(array $hover): Markers
    {
        $this->hover = $hover;
        return $this;
    }
}