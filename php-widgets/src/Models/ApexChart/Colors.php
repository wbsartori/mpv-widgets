<?php

namespace Dashboards\Models\ApexChart;

class Colors
{
    /**
     * @var array
     */
    private $colors = [];

    /**
     * @return array
     */
    public function get(): array
    {
        return [
            'colors' => $this->getColors()
        ];
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
     * @return $this
     */
    public function setColors(array $colors): Colors
    {
        $this->colors = $colors;
        return $this;
    }
}
