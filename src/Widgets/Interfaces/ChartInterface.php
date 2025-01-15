<?php

declare(strict_types=1);

namespace Dashboards\Widgets\Interfaces;

interface ChartInterface
{
    /**
     * @return array
     */
    public function get(): array;

    /**
     * @param string $title
     * @return ChartInterface
     */
    public function title(string $title): ChartInterface;

    /**
     * @param string $name
     * @return ChartInterface
     */
    public function name(string $name): ChartInterface;

    /**
     * @param ConfigurationInterface $configurationInterface
     * @return ChartInterface
     */
    public function chart(ConfigurationInterface $configurationInterface): ChartInterface;

    /**
     * @param FilterInterface $filterInterface
     * @return ChartInterface
     */
    public function filters(FilterInterface $filterInterface): ChartInterface;

    /**
     * @param array<ComponentsInterface> $components
     * @return ChartInterface
     */
    public function components(array $components = []): ChartInterface;
}
