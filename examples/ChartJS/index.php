<?php

use Dashboards\Examples\{ChartJS\Example01,};

require_once dirname(__DIR__, 2) . "/vendor/autoload.php";

echo "<h1>ChartJS Example</h1>";
$charts = json_encode((new Example01())->rawChart()['chart']);
?>

<div>
    <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const ctx = document.getElementById('myChart');
    new Chart(ctx, <?php echo $charts ?>);
</script>

