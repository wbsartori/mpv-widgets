<?php

namespace Dashboards\Widgets\Components\Buttons\Button;

class ButtonComponent implements ButtonComponentInterface
{
    private string $name = 'button';
    private string $color = 'gray';
    private string $onClickAlert = 'onClickAlert';

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


    public function get(): array
    {
        return [
            'button' => [
                'type' => 'button',
                'name' => $this->name,
                'color' => $this->color,
                'component' => '<button id="'.$this->name.'" name="'.$this->name.'" class="btn m-1" style="background-color: '.$this->color.'"> <span class="badge">'.$this->name.'</span></button>',
            ],
        ];
    }
}