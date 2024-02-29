<?php

namespace Dashboards\Models\ApexChart;

class Labels
{
    /**
     * @var array
     */
    private $labels = [];

    /**
     * @return array[]
     */
    public function get(): array
    {
        return ['labels' => $this->getLabels()];
    }

    private function getLabels(): array
    {
        return $this->labels;
    }

    public function setLabels(array $labels): Labels
    {
        $this->labels = $labels;
        return $this;
    }
}
