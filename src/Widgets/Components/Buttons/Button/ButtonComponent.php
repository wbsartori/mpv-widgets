<?php

namespace Dashboards\Widgets\Components\Buttons\Button;

use Dashboards\Widgets\Components\Actions\ActionButtonInterface;

class ButtonComponent implements ButtonComponentInterface
{
    private string $name = 'button';
    private string $color = 'gray';
    private array $action = [];

    public function name(string $name): ButtonComponentInterface
    {
        $this->name = $name;
        return $this;
    }

    public function color(string $color): ButtonComponentInterface
    {
        $this->color = $color;
        return $this;
    }

    public function action(ActionButtonInterface $action): ButtonComponentInterface
    {
        $this->action = $action->get();
        return $this;
    }


    public function get(): array
    {

        $onclick = isset($this->action['onclick']) ? $this->action['onclick'] : '';
        return [
            'button' => [
                'type' => 'button',
                'name' => $this->name,
                'color' => $this->color,
                'actionButton' => $this->action,
                'component' => '<button '.$onclick.' id="'.$this->name.'" name="'.$this->name.'" class="btn m-1" style="background-color: '.$this->color.'"> <span class="badge">'.$this->name.'</span></button>',
            ],
        ];
    }
}