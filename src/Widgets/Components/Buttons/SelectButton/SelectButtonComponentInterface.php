<?php

namespace Dashboards\Widgets\Components\Buttons\SelectButton;

use Dashboards\Widgets\Interfaces\ComponentsInterface;

interface SelectButtonComponentInterface extends ComponentsInterface
{
    public function name(string $name): SelectButtonComponentInterface;
    public function color(string $color): SelectButtonComponentInterface;

    public function options(array $options): SelectButtonComponentInterface;
}
