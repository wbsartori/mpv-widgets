<?php

namespace Dashboards\Widgets\Components\Buttons\Button;

use Dashboards\Widgets\Components\Actions\ActionButtonInterface;
use Dashboards\Widgets\Interfaces\ComponentsInterface;

interface ButtonComponentInterface extends ComponentsInterface
{
    public function name(string $name): ButtonComponentInterface;
    public function color(string $color): ButtonComponentInterface;
    public function action(ActionButtonInterface $action): ButtonComponentInterface;
}
