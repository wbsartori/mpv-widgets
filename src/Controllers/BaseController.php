<?php

declare(strict_types=1);

namespace Dashboards\Controllers;

use Dashboards\Controller;

class BaseController extends Controller
{
    public function notFound()
    {
        $this->views('404');
    }
}
