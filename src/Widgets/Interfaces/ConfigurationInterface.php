<?php

declare(strict_types=1);

namespace Dashboards\Widgets\Interfaces;

interface ConfigurationInterface
{
    /**
     * @return array[]
     */
    public function get(): array;

    /**
     * @param string $type
     * @return $this
     */
    public function type(string $type): ConfigurationInterface;

    /**
     * @param array $labels
     * @return $this
     */
    public function labels(array $labels): ConfigurationInterface;

    /**
     * @param array $datasets
     * @return $this
     */
    public function datasets(array $datasets): ConfigurationInterface;

    /**
     * @param array $options
     * @return $this
     */
    public function options(array $options): ConfigurationInterface;

    /**
     * @param array $plugins
     * @return $this
     */
    public function plugins(array $plugins): ConfigurationInterface;
}
