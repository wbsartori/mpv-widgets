<?php

namespace Dashboards\Widgets\Components\Buttons\SelectButton;

class SelectButtonComponent implements SelectButtonComponentInterface
{
    private string $name = 'button';
    private string $color = 'gray';
    private array $options = [];

    public function name(string $name): SelectButtonComponentInterface
    {
        $this->name = $name;
        return $this;
    }

    public function color(string $color): SelectButtonComponentInterface
    {
        $this->color = $color;
        return $this;
    }

    public function options(array $options): SelectButtonComponentInterface {
        $this->options = $options;
        return $this;
    }

    public function get(): array
    {
        $component = '<select class="btn m-1" style="background-color: '.$this->color.'">';
        $component .= '<option style="text-align: center" value="">---</option>';
        foreach ($this->options as $key => $item) {
            $component .= '<option value="' . $key . '">' . $item. '</option>';
        }
        $component .= '</select>';

        return [
            'button' => [
                'type' => 'button',
                'name' => $this->name,
                'color' => $this->color,
                'component' => $component,
            ],
        ];
    }
}