<?php

require dirname(__DIR__) . '/vendor/autoload.php';
$chartExample = new Dashboards\Examples\ChartBarExample();
echo json_encode($chartExample->render());
