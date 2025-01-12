<?php

use Dashboards\Examples\{ChartJS\Example01,};
use Dashboards\Examples\{ShadcnUI\Example01 as ShadcnUIExample01};

require_once "vendor/autoload.php";

echo "<h1>ChartJS Example</h1>";
echo json_encode([
    'example01' => (new Example01())->render(),
    'shadcnUIExample01' => (new ShadcnUIExample01())->render()
]);
