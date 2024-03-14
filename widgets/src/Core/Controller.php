<?php

namespace Dashboards\Core;

use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    protected $views;

    public function __construct()
    {
        $this->views = (new Views())->load();
    }

    public function views(string $page, array $data = [])
    {
        echo $this->views->make($page, $data)->render();
    }
}
