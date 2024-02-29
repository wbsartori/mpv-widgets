<?php

namespace Dashboards\Models;

class Chart
{
    /**
     * @var string
     */
    private $title;
    /**
     * @var string
     */
    private $name;
    /**
     * @var array
     */
    private $chart;
    /**
     * @var array
     */
    private $filters;

    /**
     * @return array
     */
    public function get(): array
    {
        return [
            'title' => $this->title,
            'name' => $this->name,
            'chart' => $this->chart,
            'filters' => $this->filters,
        ];
    }

    /**
     * @param string $title
     * @return Chart
     */
    public function setTitle(string $title): Chart
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param string $name
     * @return Chart
     */
    public function setName(string $name): Chart
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param array $chart
     * @return Chart
     */
    public function setChart(array $chart): Chart
    {
        $this->chart = $chart;
        return $this;
    }

    /**
     * @param array $filters
     * @return Chart
     */
    public function setFilters(array $filters): Chart
    {
        $this->filters = $filters;
        return $this;
    }
}
