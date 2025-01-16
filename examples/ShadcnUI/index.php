<?php

use Dashboards\Examples\{ShadcnUI\Example01};

require_once dirname(__DIR__, 2) . "/vendor/autoload.php";

echo "<h1>ChartJS Example</h1>";
echo json_encode((new Example01())->rawChart());
