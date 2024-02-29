<?php

namespace Dashboards\Models\ApexChart;

class States
{
    /**
     * @var array
     */
    private $normal = [];
    /**
     * @var array
     */
    private $hover = [];
    /**
     * @var array
     */
    private $active = [];

    /**
     * @return array[]
     */
    public function get(): array
    {
        return [
            'states' => [
                'normal' => $this->getNormal(),
                'hover' => $this->getHover(),
                'active' => $this->getActive(),
            ]
        ];
    }

    /**
     * @return array
     */
    private function getNormal(): array
    {
        return $this->normal;
    }

    /**
     * @param array $normal
     * @return $this
     */
    public function setNormal(array $normal): States
    {
        $this->normal = $normal;
        return $this;
    }

    /**
     * @return array
     */
    private function getHover(): array
    {
        return $this->hover;
    }

    /**
     * @param array $hover
     * @return $this
     */
    public function setHover(array $hover): States
    {
        $this->hover = $hover;
        return $this;
    }

    /**
     * @return array
     */
    private function getActive(): array
    {
        return $this->active;
    }

    /**
     * @param array $active
     * @return $this
     */
    public function setActive(array $active): States
    {
        $this->active = $active;
        return $this;
    }
}
