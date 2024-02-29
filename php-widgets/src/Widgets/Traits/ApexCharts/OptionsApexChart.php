<?php

namespace Dashboards\Widgets\Traits\ApexCharts;

use Dashboards\Models\ApexChart\Annotations;
use Dashboards\Models\ApexChart\Chart;
use Dashboards\Models\ApexChart\Colors;
use Dashboards\Models\ApexChart\DataLabels;
use Dashboards\Models\ApexChart\Fill;
use Dashboards\Models\ApexChart\ForecastDataPoints;
use Dashboards\Models\ApexChart\Grid;
use Dashboards\Models\ApexChart\Labels;
use Dashboards\Models\ApexChart\Legend;
use Dashboards\Models\ApexChart\Markers;
use Dashboards\Models\ApexChart\NoData;
use Dashboards\Models\ApexChart\Options;
use Dashboards\Models\ApexChart\PlotOptions;
use Dashboards\Models\ApexChart\Responsive;
use Dashboards\Models\ApexChart\Series;
use Dashboards\Models\ApexChart\States;
use Dashboards\Models\ApexChart\Stroke;
use Dashboards\Models\ApexChart\Subtitle;
use Dashboards\Models\ApexChart\Theme;
use Dashboards\Models\ApexChart\Title;
use Dashboards\Models\ApexChart\Tooltip;
use Dashboards\Models\ApexChart\Xaxis;
use Dashboards\Models\ApexChart\Yaxis;
use Dashboards\Models\Filter;

trait OptionsApexChart
{

    /**
     * @return Annotations
     */
    public function addAnnotations(): Annotations
    {
        return new Annotations();
    }

    /**
     * @return Chart
     */
    public function addChart(): Chart
    {
        return new Chart();
    }

    /**
     * @return Colors
     */
    public function addColors(): Colors
    {
        return new Colors();
    }

    /**
     * @return DataLabels
     */
    public function addDataLabels(): DataLabels
    {
        return new DataLabels();
    }

    /**
     * @return Fill
     */
    public function addFill(): Fill
    {
        return new Fill();
    }

    /**
     * @return ForecastDataPoints
     */
    public function addForecastDataPoints(): ForecastDataPoints
    {
        return new ForecastDataPoints();
    }

    /**
     * @return Grid
     */
    public function addGird(): Grid
    {
        return new Grid();
    }

    /**
     * @return Labels
     */
    public function addLabels(): Labels
    {
        return new Labels();
    }

    /**
     * @return Legend
     */
    public function addLegend(): Legend
    {
        return new Legend();
    }

    /**
     * @return Markers
     */
    public function addMarkers(): Markers
    {
        return new Markers();
    }

    /**
     * @return NoData
     */
    public function addNoData(): NoData
    {
        return new NoData();
    }

    /**
     * @return PlotOptions
     */
    public function addPlotOptions(): PlotOptions
    {
        return new PlotOptions();
    }

    /**
     * @return Responsive
     */
    public function addResponsive(): Responsive
    {
        return new Responsive();
    }

    /**
     * @return Series
     */
    public function addSeries(): Series
    {
        return new Series();
    }

    /**
     * @return States
     */
    public function addStates(): States
    {
        return new States();
    }

    /**
     * @return Stroke
     */
    public function addStroke(): Stroke
    {
        return new Stroke();
    }

    /**
     * @return Subtitle
     */
    public function addSubtitle(): Subtitle
    {
        return new Subtitle();
    }

    /**
     * @return Theme
     */
    public function addTheme(): Theme
    {
        return new Theme();
    }

    /**
     * @return Tooltip
     */
    public function addTooltip(): Tooltip
    {
        return new Tooltip();
    }

    /**
     * @return Xaxis
     */
    public function addXaxis(): Xaxis
    {
        return new Xaxis();
    }

    /**
     * @return Yaxis
     */
    public function addYaxis(): Yaxis
    {
        return new Yaxis();
    }

    /**
     * @return Options
     */
    public function addOptions(): Options
    {
        return new Options();
    }

    /**
     * @return Filter
     */
    public function addFilters(): Filter
    {
        return new Filter();
    }

    /**
     * @return Title
     */
    public function addTitle(): Title
    {
        return new Title();
    }
}
