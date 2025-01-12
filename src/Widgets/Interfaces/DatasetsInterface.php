<?php

declare(strict_types=1);

namespace Dashboards\Widgets\Interfaces;

interface DatasetsInterface
{
    public function get(): array;
}
