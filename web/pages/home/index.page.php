<?php require_once dirname(__DIR__) . '/layouts/header.layout.php';

$chart1 = (new \Dashboards\Examples\ChartJS\Example01())->rawChart();

$chart2 = (new \Dashboards\Examples\ChartJS\Example01())->rawChart();
?>

    <div class="dash-container">
    <div class="card">
        <div class="card-header">
            <?= $chart1['title'] . '1' ?>
        </div>
        <canvas id="<?= $chart1['name'] ?>"></canvas>
        <script>
            const <?= $chart1['name']?> = document.getElementById('<?= $chart1['name']?>');
            new Chart(<?= $chart1['name']?>, <?php echo json_encode($chart1['chart']) ?>);
        </script>

        <div class="card-footer">
            <?php
            if (isset($chart1['components'])) {
                foreach ($chart1['components'] as $button) {
                    echo $button['button']['component'];
                }
            }
            ?>
        </div>
    </div>

    <hr>
    <div class="card">
        <div class="card-header">
            <?= $chart2['title'] ?>
        </div>
        <canvas id="<?= $chart2['name'] . '_' ?>"></canvas>
        <script>
            const <?= $chart2['name'] . '_'?> = document.getElementById('<?= $chart2['name'] . '_'?>');
            new Chart(<?= $chart2['name'] . '_'?>, <?php echo json_encode($chart2['chart']) ?>);
        </script>

        <div class="card-footer">
            <?php
            if (isset($chart2['components'])) {
                foreach ($chart2['components'] as $button) {
                    echo $button['button']['component'];
                }
            }
            ?>
        </div>
    </div>

<?php require_once dirname(__DIR__) . '/layouts/footer.layout.php';
