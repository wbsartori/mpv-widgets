<?php

namespace Dashboards\Models\ApexChart;

class Series
{
    /**
     * @var array
     */
    private $name = [];
    /**
     * @var array
     */
    private $data = [];

    /**
     * @return array[]
     */
    public function get(): array
    {
        return [
            ['name' => $this->getName(), 'data' => $this->getData()]
        ];
    }

    /**
     * @return array
     */
    private function getName(): array
    {
        return $this->name;
    }

    /**
     * @param array $name
     * @return Series
     */
    public function setName(array $name): Series
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return array
     */
    private function getData(): array
    {
        return $this->data;
    }

    /**
     * @param array $data
     * @return Series
     */
    public function setData(array $data): Series
    {
        $this->data = $data;
        return $this;
    }
}
