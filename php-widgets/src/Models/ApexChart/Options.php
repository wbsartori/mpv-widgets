<?php

namespace Dashboards\Models\ApexChart;

class Options
{
    /**
     * @var array
     */
    private $annotations = [];
    /**
     * @var array
     */
    private $chart = [];
    /**
     * @var array
     */
    private $colors = [];
    /**
     * @var array
     */
    private $dataLabels = [];
    /**
     * @var array
     */
    private $fill = [];
    /**
     * @var array
     */
    private $forecastDataPoints = [];
    /**
     * @var array
     */
    private $grid = [];
    /**
     * @var array
     */
    private $labels = [];
    /**
     * @var array
     */
    private $legend = [];
    /**
     * @var array
     */
    private $markers = [];
    /**
     * @var array
     */
    private $noData = [];
    /**
     * @var array
     */
    private $plotOptions = [];
    /**
     * @var array
     */
    private $responsive = [];
    /**
     * @var array
     */
    private $series = [];
    /**
     * @var array
     */
    private $states = [];
    /**
     * @var array
     */
    private $stroke = [];
    /**
     * @var array
     */
    private $subtitle = [];
    /**
     * @var array
     */
    private $theme = [];
    /**
     * @var array
     */
    private $title = [];
    /**
     * @var array
     */
    private $tooltip = [];
    /**
     * @var array
     */
    private $xaxis = [];
    /**
     * @var array
     */
    private $yaxis = [];

    /**
     * @return array
     */
    public function get(): array
    {
        $chart = [
            'chart' => $this->getChart(),
            'colors' => $this->getColors(),
            'dataLabels' => $this->getDataLabels(),
            'fill' => $this->getFill(),
            'forecastDataPoints' => $this->getForecastDataPoints(),
            'grid' => $this->getGrid(),
            'labels' => $this->getLabels(),
            'legend' => $this->getLegend(),
            'markers' => $this->getMarkers(),
            'noData' => $this->getNoData(),
            'plotOptions' => $this->getPlotOptions(),
            'responsive' => $this->getResponsive(),
            'series' => $this->getSeries(),
            'states' => $this->getStates(),
            'stroke' => $this->getStroke(),
            'subtitle' => $this->getSubtitle(),
            'theme' => $this->getTheme(),
            'title' => $this->getTitle(),
            'tooltip' => $this->getTooltip(),
            'xaxis' => $this->getXaxis(),
            'yaxis' => $this->getYaxis()
        ];

        return array_filter($chart);
    }

    /**
     * @return array
     */
    private function getAnnotations(): array
    {
        return $this->annotations;
    }

    /**
     * @param array $annotations
     * @return $this
     */
    public function setAnnotations(array $annotations): Options
    {
        $this->annotations = $annotations;
        return $this;
    }

    /**
     * @return array
     */
    private function getChart(): array
    {
        return $this->chart;
    }

    /**
     * @param array $chart
     * @return $this
     */
    public function setChart(array $chart): Options
    {
        $this->chart = $chart;
        return $this;
    }

    /**
     * @return array
     */
    private function getColors(): array
    {
        return $this->colors;
    }

    /**
     * @param array $colors
     * @return $this
     */
    public function setColors(array $colors): Options
    {
        $this->colors = $colors;
        return $this;
    }

    /**
     * @return array
     */
    private function getDataLabels(): array
    {
        return $this->dataLabels;
    }

    /**
     * @param array $dataLabels
     * @return $this
     */
    public function setDataLabels(array $dataLabels): Options
    {
        $this->dataLabels = $dataLabels;
        return $this;
    }

    /**
     * @return array
     */
    private function getFill(): array
    {
        return $this->fill;
    }

    /**
     * @param array $fill
     * @return $this
     */
    public function setFill(array $fill): Options
    {
        $this->fill = $fill;
        return $this;
    }

    /**
     * @return array
     */
    private function getForecastDataPoints(): array
    {
        return $this->forecastDataPoints;
    }

    /**
     * @param array $forecastDataPoints
     * @return $this
     */
    public function setForecastDataPoints(array $forecastDataPoints): Options
    {
        $this->forecastDataPoints = $forecastDataPoints;
        return $this;
    }

    /**
     * @return array
     */
    private function getGrid(): array
    {
        return $this->grid;
    }

    /**
     * @param array $grid
     * @return $this
     */
    public function setGrid(array $grid): Options
    {
        $this->grid = $grid;
        return $this;
    }

    /**
     * @return array
     */
    private function getLabels(): array
    {
        return $this->labels;
    }

    /**
     * @param array $labels
     * @return $this
     */
    public function setLabels(array $labels): Options
    {
        $this->labels = $labels;
        return $this;
    }

    /**
     * @return array
     */
    private function getLegend(): array
    {
        return $this->legend;
    }

    /**
     * @param array $legend
     * @return $this
     */
    public function setLegend(array $legend): Options
    {
        $this->legend = $legend;
        return $this;
    }

    /**
     * @return array
     */
    private function getMarkers(): array
    {
        return $this->markers;
    }

    /**
     * @param array $markers
     * @return $this
     */
    public function setMarkers(array $markers): Options
    {
        $this->markers = $markers;
        return $this;
    }

    /**
     * @return array
     */
    private function getNoData(): array
    {
        return $this->noData;
    }

    /**
     * @param array $noData
     * @return $this
     */
    public function setNoData(array $noData): Options
    {
        $this->noData = $noData;
        return $this;
    }

    /**
     * @return array
     */
    private function getPlotOptions(): array
    {
        return $this->plotOptions;
    }

    /**
     * @param array $plotOptions
     * @return $this
     */
    public function setPlotOptions(array $plotOptions): Options
    {
        $this->plotOptions = $plotOptions;
        return $this;
    }

    /**
     * @return array
     */
    private function getResponsive(): array
    {
        return $this->responsive;
    }

    /**
     * @param array $responsive
     * @return $this
     */
    public function setResponsive(array $responsive): Options
    {
        $this->responsive = $responsive;
        return $this;
    }

    /**
     * @return array
     */
    private function getSeries(): array
    {
        return $this->series;
    }

    /**
     * @param array $series
     * @return $this
     */
    public function setSeries(array $series): Options
    {
        $this->series = $series;
        return $this;
    }

    /**
     * @return array
     */
    private function getStates(): array
    {
        return $this->states;
    }

    /**
     * @param array $states
     * @return $this
     */
    public function setStates(array $states): Options
    {
        $this->states = $states;
        return $this;
    }

    /**
     * @return array
     */
    private function getStroke(): array
    {
        return $this->stroke;
    }

    /**
     * @param array $stroke
     * @return $this
     */
    public function setStroke(array $stroke): Options
    {
        $this->stroke = $stroke;
        return $this;
    }

    /**
     * @return array
     */
    private function getSubtitle(): array
    {
        return $this->subtitle;
    }

    /**
     * @param array $subtitle
     * @return $this
     */
    public function setSubtitle(array $subtitle): Options
    {
        $this->subtitle = $subtitle;
        return $this;
    }

    /**
     * @return array
     */
    private function getTheme(): array
    {
        return $this->theme;
    }

    /**
     * @param array $theme
     * @return $this
     */
    public function setTheme(array $theme): Options
    {
        $this->theme = $theme;
        return $this;
    }

    /**
     * @return array
     */
    private function getTitle(): array
    {
        return $this->title;
    }

    /**
     * @param array $title
     * @return $this
     */
    public function setTitle(array $title): Options
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return array
     */
    private function getTooltip(): array
    {
        return $this->tooltip;
    }

    /**
     * @param array $tooltip
     * @return $this
     */
    public function setTooltip(array $tooltip): Options
    {
        $this->tooltip = $tooltip;
        return $this;
    }

    /**
     * @return array
     */
    private function getXaxis(): array
    {
        return $this->xaxis;
    }

    /**
     * @param array $xaxis
     * @return $this
     */
    public function setXaxis(array $xaxis): Options
    {
        $this->xaxis = $xaxis;
        return $this;
    }

    /**
     * @return array
     */
    private function getYaxis(): array
    {
        return $this->yaxis;
    }

    /**
     * @param array $yaxis
     * @return $this
     */
    public function setYaxis(array $yaxis): Options
    {
        $this->yaxis = $yaxis;
        return $this;
    }

    /**
     * @param Chart $chart
     * @return array
     */
    public function chart(Chart $chart): array
    {
        $this->setChart($chart->get());
        return $chart->get();
    }
}