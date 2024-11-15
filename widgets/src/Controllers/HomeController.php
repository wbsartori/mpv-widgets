<?php

declare(strict_types=1);

namespace Dashboards\Controllers;

use Dashboards\Controller;
use Dashboards\Examples\Services\ChartBarExample;
use Dashboards\Examples\Services\ChartBarExample2;

class HomeController extends Controller
{
    public function index()
    {
        $charts = [(new ChartBarExample())->render(), (new ChartBarExample2())->render(), (new ChartBarExample())->render()];
        $quantity = 3;
        $this->views('index', compact('charts', 'quantity'));
    }
}