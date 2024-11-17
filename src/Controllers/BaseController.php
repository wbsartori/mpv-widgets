<?php

declare(strict_types=1);

namespace Dashboards\Controllers;

use Dashboards\Controller;
use Dashboards\Examples\Services\ChartBarExample;
use Dashboards\Examples\Services\ChartBarExample2;
use Illuminate\Http\Request;

class BaseController extends Controller
{
//    public function index(Request $request)
//    {
//        echo '<pre>';
//        print_r($request->route()->getAction('charts'));
//        exit;
//        $charts = [(new ChartBarExample())->render(), (new ChartBarExample2())->render(), (new ChartBarExample())->render()];
//        $quantity = 3;
//        $this->views('index', compact('charts', 'quantity'));
//    }
//
//    public function notFound()
//    {
//        $this->views('404');
//    }
}