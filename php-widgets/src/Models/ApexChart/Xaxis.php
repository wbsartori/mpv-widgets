<?php

namespace Dashboards\Models\ApexChart;

class Xaxis
{
    /**
     * @var array
     */
    private $categories = [];

    /**
     * @return array[]
     */
    public function get(): array
    {
        return [
            'categories' => $this->getCategories()
        ];
    }

    /**
     * @return array
     */
    private function getCategories(): array
    {
        return $this->categories;
    }

    /**
     * @param array $categories
     * @return Xaxis
     */
    public function setCategories(array $categories): Xaxis
    {
        $this->categories = $categories;
        return $this;
    }
}
