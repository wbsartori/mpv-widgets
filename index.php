<?php

use Dashboards\Examples\{
    Example01,
    Example02,
    Example03,
    Example04,
    Example05,
    Example06,
    Example07,
};

require_once "vendor/autoload.php";

echo json_encode([
    'example01' => (new Example01())->render(),
    'example02' => (new Example02())->render(),
    'example03' => (new Example03())->render(),
    'example04' => (new Example04())->render(),
    'example05' => (new Example05())->render(),
    'example06' => (new Example06())->render(),
    'example07' => (new Example07())->render(),
]);
