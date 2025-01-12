<?php

declare(strict_types=1);

namespace Dashboards\Widgets\Interfaces;

interface ConfigurationInterface
{
    public function get(): array;
}
