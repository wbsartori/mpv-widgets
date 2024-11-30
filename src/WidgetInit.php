<?php

declare(strict_types=1);

namespace Dashboards;

class WidgetInit
{
    public static function init()
    {
        (new \Dashboards\Environment());
    }

    public static function initAll()
    {
        (new \Dashboards\Environment());
        (new \Dashboards\Routes())->routes();
    }
}
