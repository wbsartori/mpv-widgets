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

    public function get(): array
    {
        return [
            'title' => $this->title,
            'name' => $this->name,
            'chart' => $this->chart,
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

    public function chart(ConfigurationInterface $configurationInterface): ShadcnUI
    {
        $this->chart = $configurationInterface->get();
        return $this;
    }

    public function filters(FilterInterface $filterInterface): ShadcnUI
    {
        $this->filters = $filterInterface->get();
        return $this;
    }
}
