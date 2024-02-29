<?php

namespace Dashboards\Models\ApexChart;

class Stroke
{
    /**
     * @var bool
     */
    private $show = true;
    /**
     * @var string
     */
    private $curve = 'smooth';
    /**
     * @var string
     */
    private $lineCap = 'butt';
    /**
     * @var array
     */
    private $colors = [];
    /**
     * @var int
     */
    private $width = 2;
    /**
     * @var int
     */
    private $dashArray = 0;

    /**
     * @return array
     */
    public function get(): array
    {
        return [
            "show" => $this->isShow(),
            "curve" => $this->getCurve(),
            "lineCap" => $this->getLineCap(),
            "colors" => $this->getColors(),
            "width" => $this->getWidth(),
            "dashArray" => $this->getDashArray(),
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
     * @return Stroke
     */
    public function setShow(bool $show): Stroke
    {
        $this->show = $show;
        return $this;
    }

    /**
     * @return string
     */
    private function getCurve(): string
    {
        return $this->curve;
    }

    /**
     * @param string $curve
     * @return Stroke
     */
    public function setCurve(string $curve): Stroke
    {
        $this->curve = $curve;
        return $this;
    }

    /**
     * @return string
     */
    private function getLineCap(): string
    {
        return $this->lineCap;
    }

    /**
     * @param string $lineCap
     * @return Stroke
     */
    public function setLineCap(string $lineCap): Stroke
    {
        $this->lineCap = $lineCap;
        return $this;
    }

    /**
     * @return array
     */
    private function getColors(): array
    {
        return $this->colors;
    }

    /**
     * @param array $colors
     * @return Stroke
     */
    public function setColors(array $colors): Stroke
    {
        $this->colors = $colors;
        return $this;
    }

    /**
     * @return int
     */
    private function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @param int $width
     * @return Stroke
     */
    public function setWidth(int $width): Stroke
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return int
     */
    private function getDashArray(): int
    {
        return $this->dashArray;
    }

    /**
     * @param int $dashArray
     * @return Stroke
     */
    public function setDashArray(int $dashArray): Stroke
    {
        $this->dashArray = $dashArray;
        return $this;
    }
}
