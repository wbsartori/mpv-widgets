
function init(chartId, chartData)
{
    const ctx = document.getElementById(chartId).getContext('2d');
    return new Chart(ctx, chartData);
}

function updateChart(chartId,newData)
{
    if (chartId) {
        chartId.data = newData;
        chartId.update();
    }
}

function destroyChart(chartId)
{
    if (chartId) {
        chartId.destroy();
        chartId = null;
    }
}