<?php

namespace Dashboards\Models\ApexChart;

class Responsive
{
    /**
     * @var string
     */
    private $breakpoint = '';
    /**
     * @var array
     */
    private $options = [];

    /**
     * @return array
     */
    public function get(): array
    {
        return [
            'responsive' => [
                'breakpoint' => $this->getBreakpoint(),
                'options' => $this->getOptions(),
            ]
        ];
    }

    /**
     * @return string
     */
    private function getBreakpoint(): string
    {
        return $this->breakpoint;
    }

    /**
     * @param string $breakpoint
     * @return $this
     */
    public function setBreakpoint(string $breakpoint): Responsive
    {
        $this->breakpoint = $breakpoint;
        return $this;
    }

    /**
     * @return array
     */
    private function getOptions(): array
    {
        return $this->options;
    }

    /**
     * @param array $options
     * @return $this
     */
    public function setOptions(array $options): Responsive
    {
        $this->options = $options;
        return $this;
    }
}
