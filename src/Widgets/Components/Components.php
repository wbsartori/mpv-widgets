<?php

namespace Dashboards\Widgets\Components;

use Dashboards\Widgets\Components\Buttons\Button\ButtonComponent;
use Dashboards\Widgets\Components\Buttons\Button\ButtonComponentInterface;
use Dashboards\Widgets\Components\Buttons\SelectButton\SelectButtonComponent;
use Dashboards\Widgets\Components\Buttons\SelectButton\SelectButtonComponentInterface;
use Dashboards\Widgets\Interfaces\ComponentsInterface;

class Components implements ComponentsInterface
{

    public function button(): ButtonComponentInterface
    {
        return new ButtonComponent();
    }

    public function selectButton(): SelectButtonComponentInterface {
        return new SelectButtonComponent();
    }
    public function get(): array {
        return [
            'buttons' => [
                'button' => $this->button()->get()
            ]
        ];
    }
}