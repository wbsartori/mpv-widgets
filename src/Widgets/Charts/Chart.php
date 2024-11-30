<?php

declare(strict_types=1);

namespace Dashboards\Widgets\Charts;

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
    public function title(string $title): Chart
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param string $name
     * @return Chart
     */
    public function name(string $name): Chart
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param array $chart
     * @return Chart
     */
    public function chart(array $chart): Chart
    {
        $this->chart = $chart;
        return $this;
    }

    /**
     * @param array $filters
     * @return Chart
     */
    public function filters(array $filters): Chart
    {
        $this->filters = $filters;
        return $this;
    }
}
