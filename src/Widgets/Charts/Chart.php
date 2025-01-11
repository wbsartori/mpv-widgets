<?php

declare(strict_types=1);

namespace Dashboards\Widgets\Charts;

use Dashboards\Widgets\Interfaces\ChartInterface;
use Dashboards\Widgets\Interfaces\ConfigurationInterface;
use Dashboards\Widgets\Interfaces\FilterInterface;

class Chart implements ChartInterface
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
     * @param ConfigurationInterface $configurationInterface
     * @return Chart
     */
    public function chart(ConfigurationInterface $configurationInterface): Chart
    {
        $this->chart = $configurationInterface->get();
        return $this;
    }

    /**
     * @param FilterInterface $filterInterface
     * @return $this]
     */
    public function filters(FilterInterface $filterInterface): Chart
    {
        $this->filters = $filterInterface->get();
        return $this;
    }
}
