<?php

declare(strict_types=1);

namespace Dashboards\Widgets\Charts\ShadcnUI;

use Dashboards\Widgets\Interfaces\ChartInterface;
use Dashboards\Widgets\Interfaces\ConfigurationInterface;
use Dashboards\Widgets\Interfaces\FilterInterface;

class ShadcnUI implements ChartInterface
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
     * @var array|\Dashboards\Widgets\Interfaces\ComponentsInterface[]
     */
    private array $components = [];

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

    public function title(string $title): ShadcnUI
    {
        $this->title = $title;
        return $this;
    }

    public function name(string $name): ShadcnUI
    {
        $this->name = $name;
        return $this;
    }

    public function charts(ConfigurationInterface $configurationInterface): ShadcnUI
    {
        $this->chart = $configurationInterface->get();
        return $this;
    }

    public function filters(FilterInterface $filterInterface): ShadcnUI
    {
        $this->filters = $filterInterface->get();
        return $this;
    }


    public function components(array $components = []): ShadcnUI
    {
        $this->components = $components;
        return $this;
    }
}
