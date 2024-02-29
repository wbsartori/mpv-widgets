<?php

namespace Dashboards\Models\ApexChart;

class Theme
{
    /**
     * @var string
     */
    private $mode = 'light';
    /**
     * @var string
     */
    private $palette = 'palette1';
    /**
     * @var array
     */
    private $monochrome = [];

    /**
     * @return array[]
     */
    public function get(): array
    {
        return [
            'theme' => [
                'mode' => $this->getMode(),
                'palette' => $this->getPalette(),
                'monochrome' => $this->getMonochrome()
            ]
        ];
    }

    /**
     * @return string
     */
    private function getMode(): string
    {
        return $this->mode;
    }

    /**
     * @param string $mode
     * @return $this
     */
    public function setMode(string $mode): Theme
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * @return string
     */
    private function getPalette(): string
    {
        return $this->palette;
    }

    /**
     * @param string $palette
     * @return $this
     */
    public function setPalette(string $palette): Theme
    {
        $this->palette = $palette;
        return $this;
    }

    /**
     * @return array
     */
    private function getMonochrome(): array
    {
        return $this->monochrome;
    }

    /**
     * @param array $monochrome
     * @return $this
     */
    public function setMonochrome(array $monochrome): Theme
    {
        $this->monochrome = $monochrome;
        return $this;
    }
}
