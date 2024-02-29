<?php

namespace Dashboards\Models\ApexChart;

class ForecastDataPoints
{
    /**
     * @var int
     */
    private $count = 0;
    /**
     * @var float
     */
    private $fillOpacity = 0.5;
    /**
     * @var string
     */
    private $strokeWidth = '';
    /**
     * @var int
     */
    private $dashArray = 4;

    /**
     * @return array[]
     */
    public function get(): array
    {
        return [
          'forecastDataPoints' => [
              'count' => $this->getCount(),
              'fillOpacity' => $this->getFillOpacity(),
              'strokeWidth' => $this->getStrokeWidth(),
              'dashArray' => $this->getDashArray(),
          ]
        ];
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @param int $count
     * @return $this
     */
    public function setCount(int $count): ForecastDataPoints
    {
        $this->count = $count;
        return $this;
    }

    /**
     * @return float
     */
    public function getFillOpacity(): float
    {
        return $this->fillOpacity;
    }

    /**
     * @param float $fillOpacity
     * @return $this
     */
    public function setFillOpacity(float $fillOpacity): ForecastDataPoints
    {
        $this->fillOpacity = $fillOpacity;
        return $this;
    }

    /**
     * @return string
     */
    private function getStrokeWidth(): string
    {
        return $this->strokeWidth;
    }

    /**
     * @param string $strokeWidth
     * @return $this
     */
    public function setStrokeWidth(string $strokeWidth): ForecastDataPoints
    {
        $this->strokeWidth = $strokeWidth;
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
     * @return $this
     */
    public function setDashArray(int $dashArray): ForecastDataPoints
    {
        $this->dashArray = $dashArray;
        return $this;
    }
}
