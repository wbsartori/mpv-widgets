<?php

namespace Dashboards\Widgets\Interfaces;

use Dashboards\Widgets\Charts\ChartsJs\Color;
use Dashboards\Widgets\Charts\ChartsJs\Datasets;

interface DatasetsInterface
{
    /**
     * @return Datasets
     */
    public function push(): DatasetsInterface;

    public function backgroundColor(Color $backgroundColor): DatasetsInterface;

    public function base($base): DatasetsInterface;

    public function barPercentage($barPercentage): DatasetsInterface;

    public function barThickness($barThickness): DatasetsInterface;

    public function borderColor(Color $borderColor): DatasetsInterface;

    public function borderSkipped($borderSkipped): DatasetsInterface;

    public function borderWidth($borderWidth): DatasetsInterface;

    public function borderRadius($borderRadius): DatasetsInterface;

    public function categoryPercentage($categoryPercentage): DatasetsInterface;

    public function clip($clip): DatasetsInterface;

    public function data(array $data): DatasetsInterface;

    public function grouped(bool $grouped): DatasetsInterface;

    public function hoverBackgroundColor(Color $hoverBackgroundColor): DatasetsInterface;

    public function hoverBorderColor(Color $hoverBorderColor): DatasetsInterface;

    public function hoverBorderWidth($hoverBorderWidth): DatasetsInterface;

    public function hoverBorderRadius($hoverBorderRadius): DatasetsInterface;

    public function indexAxis(string $indexAxis): DatasetsInterface;

    public function inflateAmount(string $inflateAmount): DatasetsInterface;

    public function maxBarThickness($maxBarThickness): DatasetsInterface;

    public function minBarLength($minBarLength): DatasetsInterface;

    public function label(string $label): DatasetsInterface;

    public function order($order): DatasetsInterface;

    public function pointStyle(string $pointStyle): DatasetsInterface;

    public function skipNull(bool $skipNull): DatasetsInterface;

    public function stack(string $stack): DatasetsInterface;

    public function xAxisID(string $xAxisID): DatasetsInterface;

    public function yAxisID(string $yAxisID): DatasetsInterface;

    public function get(): array;

    public function setDatasets(array $datasets): void;
}