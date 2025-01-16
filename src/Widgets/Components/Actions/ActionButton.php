<?php

namespace Dashboards\Widgets\Components\Actions;

class ActionButton implements ActionButtonInterface
{

    private string $message;

    public static function make(): ActionButtonInterface
    {
        return new self();
    }

    public function onClickAlert(string $message): ActionButtonInterface
    {
        $this->message = "alert('".$message."')";
        return $this;
    }

    public function get(): array
    {
        return [
            'onclick' => 'onclick="'.$this->message.'"'
        ];
    }
}