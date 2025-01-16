<?php

namespace Dashboards\Widgets\Components\Actions;

interface ActionButtonInterface
{
    public function onClickAlert(string $message): ActionButtonInterface;
    public function get(): array;
}