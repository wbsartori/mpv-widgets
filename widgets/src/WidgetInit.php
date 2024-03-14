<?php

namespace Dashboards;

class WidgetInit
{
    public static function init()
    {
        (new \Dashboards\Core\Environment());
    }

    public static function initAll()
    {
        (new \Dashboards\Core\Environment());
        (new \Dashboards\Core\Routes())->routes();
    }
}
