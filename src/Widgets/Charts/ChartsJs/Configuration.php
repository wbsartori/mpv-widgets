<?php

declare(strict_types=1);

namespace Dashboards\Widgets\Charts\ChartsJs;

use Dashboards\Widgets\Charts\ChartsJs\Interfaces\ChartJSConfigurationInterface;

class Configuration implements ChartJSConfigurationInterface
{
    /**
     * @var string
     */
    private $type;
    /**
     * @var array
     */
    private $labels;
    /**
     * @var array
     */
    private $datasets;
    /**
     * @var array
     */
    private $options;
    /**
     * @var array
     */
    private $plugins;

    /**
     * @return array[]
     */
    public function get(): array
    {
        $data = [];
        $data['labels'] = $this->labels ?? '';
        $data['datasets'] = $this->datasets ?? '';
        $data['options'] = $this->options ?? '';
        $data['plugins'] = $this->plugins ?? '';
        return [
            'type' => $this->type ?? 'bar',
            'data' => array_filter($data),
        ];
    }

    /**
     * @param string $type
     * @return $this
     */
    public function type(string $type): Configuration
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param array $labels
     * @return $this
     */
    public function labels(array $labels): Configuration
    {
        $this->labels = $labels;
        return $this;
    }

    /**
     * @param array $datasets
     * @return $this
     */
    public function datasets(array $datasets): Configuration
    {
        $this->datasets = $datasets;
        return $this;
    }

    /**
     * @param array $options
     * @return $this
     */
    public function options(array $options): Configuration
    {
        $this->options = $options;
        return $this;
    }

    /**
     * @param array $plugins
     * @return $this
     */
    public function plugins(array $plugins): Configuration
    {
        $this->plugins = $plugins;
        return $this;
    }
}
