<?php

declare(strict_types=1);

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
    public function rawChart(): array;
}
