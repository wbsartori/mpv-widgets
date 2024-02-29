<?php

namespace Dashboards\Widgets\Interfaces;

interface InterfaceWidget
{
    /**
     * @return array
     */
    public function query(): array;
    /**
     * @return array
     */
    public function render(): array;
}
