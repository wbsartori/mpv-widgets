<?php

declare(strict_types=1);

namespace Dashboards\Widgets\Charts\ChartsJs;

use Dashboards\Widgets\Interfaces\ChartInterface;
use Dashboards\Widgets\Interfaces\ComponentsInterface;
use Dashboards\Widgets\Interfaces\ConfigurationInterface;
use Dashboards\Widgets\Interfaces\FilterInterface;

class ChartJS implements ChartInterface
{
    /**
     * @var string
     */
    private string $title;
    /**
     * @var string
     */
    private string $name;
    /**
     * @var array
     */
    private array $chart;
    /**
     * @var array
     */
    private array $filters;

    /**
     * @var array
     */
    private array $components = [];

    /**
     * @return array
     */
    public function get(): array
    {
        $components = [];
        if($this->components !== []) {
            foreach ($this->components as $component) {
                $components[] = $component->get();
            }
        }

        return [
            'title' => $this->title,
            'name' => $this->name,
            'chart' => $this->chart,
            'components' => $components,
            'filters' => $this->filters,
        ];
    }

    /**
     * @param string $title
     * @return ChartJS
     */
    public function title(string $title): ChartJS
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param string $name
     * @return ChartJS
     */
    public function name(string $name): ChartJS
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param ConfigurationInterface $configurationInterface
     * @return ChartJS
     */
    public function chart(ConfigurationInterface $configurationInterface): ChartJS
    {
        $this->chart = $configurationInterface->get();
        return $this;
    }

    /**
     * @param FilterInterface $filterInterface
     * @return $this
     */
    public function filters(FilterInterface $filterInterface): ChartJS
    {
        $this->filters = $filterInterface->get();
        return $this;
    }

    /**
     * @param array<ComponentsInterface> $components
     * @return ChartJS
     */
    public function components(array $components = []): ChartJS
    {
        $this->components = $components;
        return $this;
    }
}
