<?php

namespace Dashboards\Examples\Controllers;

use Dashboards\Core\Controller;
use Dashboards\Examples\Services\ChartBarExample;

class HomeController extends Controller
{
    public function index()
    {
        $chart = (new ChartBarExample())->render();
        $chart2 = (new ChartBarExample())->render();
        $chart2['name'] = 'chaart2';
        $this->views('home.index', [
            'chart' => $chart,
            'chart2' => $chart2,
        ]);
    }
}