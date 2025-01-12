<?php

declare(strict_types=1);

namespace Dashboards\Widgets\Charts\ChartsJs;

use Dashboards\Widgets\Charts\ChartsJs\Interfaces\ChartJsDatasetsInterface;
use Dashboards\Widgets\Interfaces\DatasetsInterface;

class Datasets implements ChartJsDatasetsInterface
{
    /**
     * @var Color
     */
    private Color $backgroundColor;

    /**
     * @var float
     */
    private float $base;

    /**
     * @var float
     */
    private float $barPercentage;

    /**
     * @var float|string
     */
    private $barThickness;

    /**
     * @var Color
     */
    private Color $borderColor;

    /**
     * @var string|boolean
     */
    private $borderSkipped;
    /**
     * @var float|object
     */
    private $borderWidth;
    /**
     * @var float|object
     */
    private $borderRadius;
    /**
     * @var float
     */
    private float $categoryPercentage;
    /**
     * @var number|object|false
     */
    private $clip;
    /**
     * @var object|object[]| number[]|string[]
     */
    private $data;
    /**
     * @var boolean
     */
    private bool $grouped;
    /**
     * @var Color
     */
    private Color $hoverBackgroundColor;
    /**
     * @var Color
     */
    private Color $hoverBorderColor;
    /**
     * @var float
     */
    private float $hoverBorderWidth;
    /**
     * @var float
     */
    private float $hoverBorderRadius;
    /**
     * @var string
     */
    private string $indexAxis;
    /**
     * @var number|'auto'
     */
    private $inflateAmount;
    /**
     * @var float
     */
    private float $maxBarThickness;
    /**
     * @var float
     */
    private float $minBarLength;
    /**
     * @var string
     */
    private string $label;
    /**
     * @var float
     */
    private float $order;
    /**
     * @var string
     */
    private string $pointStyle;
    /**
     * @var boolean
     */
    private bool $skipNull;
    /**
     * @var string
     */
    private string $stack;
    /**
     * @var string
     */
    private string $xAxisID;
    /**
     * @var string
     */
    private string $yAxisID;

    /**
     * @var array
     */
    private array $datasets = [];

    /**
     * @return Datasets
     */
    public function push(): DatasetsInterface
    {
        $datasets = [];
        $datasets['backgroundColor'] = $this->backgroundColor ?? '';
        $datasets['base'] = $this->base ?? '';
        $datasets['barPercentage'] = $this->barPercentage ?? '';
        $datasets['barThickness'] = $this->barThickness ?? '';
        $datasets['borderColor'] = $this->borderColor ?? '';
        $datasets['borderSkipped'] = $this->borderSkipped ?? '';
        $datasets['borderWidth'] = $this->borderWidth ?? '';
        $datasets['borderRadius'] = $this->borderRadius ?? '';
        $datasets['categoryPercentage'] = $this->categoryPercentage ?? '';
        $datasets['clip'] = $this->clip ?? '';
        $datasets['data'] = $this->data ?? '';
        $datasets['grouped'] = $this->grouped ?? '';
        $datasets['hoverBackgroundColor'] = $this->hoverBackgroundColor ?? '';
        $datasets['hoverBorderColor'] = $this->hoverBorderColor ?? '';
        $datasets['hoverBorderWidth'] = $this->hoverBorderWidth ?? '';
        $datasets['hoverBorderRadius'] = $this->hoverBorderRadius ?? '';
        $datasets['indexAxis'] = $this->indexAxis ?? '';
        $datasets['inflateAmount'] = $this->inflateAmount ?? '';
        $datasets['maxBarThickness'] = $this->maxBarThickness ?? '';
        $datasets['minBarLength'] = $this->minBarLength ?? '';
        $datasets['label'] = $this->label ?? '';
        $datasets['order'] = $this->order ?? '';
        $datasets['pointStyle'] = $this->pointStyle ?? '';
        $datasets['skipNull'] = $this->skipNull ?? '';
        $datasets['stack'] = $this->stack ?? '';
        $datasets['xAxisID'] = $this->xAxisID ?? '';
        $datasets['yAxisID'] = $this->yAxisID ?? '';
        $this->setDatasets(array_filter($datasets));
        return $this;
    }

    public function backgroundColor(Color $backgroundColor): DatasetsInterface
    {
        $this->backgroundColor = $backgroundColor;
        return $this;
    }

    /**
     * @param float|int|string $base
     * @return Datasets
     */
    public function base($base): DatasetsInterface
    {
        $this->base = $base;
        return $this;
    }

    /**
     * @param float|int|string $barPercentage
     * @return Datasets
     */
    public function barPercentage($barPercentage): DatasetsInterface
    {
        $this->barPercentage = $barPercentage;
        return $this;
    }

    /**
     * @param float|int|string $barThickness
     * @return Datasets
     */
    public function barThickness($barThickness): DatasetsInterface
    {
        $this->barThickness = $barThickness;
        return $this;
    }

    public function borderColor(Color $borderColor): DatasetsInterface
    {
        $this->borderColor = $borderColor;
        return $this;
    }

    /**
     * @param bool|string $borderSkipped
     * @return Datasets
     */
    public function borderSkipped($borderSkipped): DatasetsInterface
    {
        $this->borderSkipped = $borderSkipped;
        return $this;
    }

    /**
     * @param float|int|object|string $borderWidth
     * @return Datasets
     */
    public function borderWidth($borderWidth): DatasetsInterface
    {
        $this->borderWidth = $borderWidth;
        return $this;
    }

    /**
     * @param float|int|object|string $borderRadius
     * @return Datasets
     */
    public function borderRadius($borderRadius): DatasetsInterface
    {
        $this->borderRadius = $borderRadius;
        return $this;
    }

    /**
     * @param float|int|string $categoryPercentage
     * @return Datasets
     */
    public function categoryPercentage($categoryPercentage): DatasetsInterface
    {
        $this->categoryPercentage = $categoryPercentage;
        return $this;
    }

    /**
     * @param false|number|object $clip
     * @return Datasets
     */
    public function clip($clip): DatasetsInterface
    {
        $this->clip = $clip;
        return $this;
    }

    /**
     * @param array $data
     * @return Datasets
     */
    public function data(array $data): DatasetsInterface
    {
        $this->data = $data;
        return $this;
    }

    public function grouped(bool $grouped): DatasetsInterface
    {
        $this->grouped = $grouped;
        return $this;
    }

    public function hoverBackgroundColor(Color $hoverBackgroundColor): DatasetsInterface
    {
        $this->hoverBackgroundColor = $hoverBackgroundColor;
        return $this;
    }

    public function hoverBorderColor(Color $hoverBorderColor): DatasetsInterface
    {
        $this->hoverBorderColor = $hoverBorderColor;
        return $this;
    }

    /**
     * @param float|int|string $hoverBorderWidth
     * @return Datasets
     */
    public function hoverBorderWidth($hoverBorderWidth): DatasetsInterface
    {
        $this->hoverBorderWidth = $hoverBorderWidth;
        return $this;
    }

    /**
     * @param float|int|string $hoverBorderRadius
     * @return Datasets
     */
    public function hoverBorderRadius($hoverBorderRadius): DatasetsInterface
    {
        $this->hoverBorderRadius = $hoverBorderRadius;
        return $this;
    }

    public function indexAxis(string $indexAxis): DatasetsInterface
    {
        $this->indexAxis = $indexAxis;
        return $this;
    }

    public function inflateAmount(string $inflateAmount): DatasetsInterface
    {
        $this->inflateAmount = $inflateAmount;
        return $this;
    }

    /**
     * @param float|int|string $maxBarThickness
     * @return Datasets
     */
    public function maxBarThickness($maxBarThickness): DatasetsInterface
    {
        $this->maxBarThickness = $maxBarThickness;
        return $this;
    }

    /**
     * @param float|int|string $minBarLength
     * @return Datasets
     */
    public function minBarLength($minBarLength): DatasetsInterface
    {
        $this->minBarLength = $minBarLength;
        return $this;
    }

    public function label(string $label): DatasetsInterface
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @param float|int|string $order
     * @return Datasets
     */
    public function order($order): DatasetsInterface
    {
        $this->order = $order;
        return $this;
    }

    public function pointStyle(string $pointStyle): DatasetsInterface
    {
        $this->pointStyle = $pointStyle;
        return $this;
    }

    public function skipNull(bool $skipNull): DatasetsInterface
    {
        $this->skipNull = $skipNull;
        return $this;
    }

    public function stack(string $stack): DatasetsInterface
    {
        $this->stack = $stack;
        return $this;
    }

    public function xAxisID(string $xAxisID): DatasetsInterface
    {
        $this->xAxisID = $xAxisID;
        return $this;
    }

    public function yAxisID(string $yAxisID): DatasetsInterface
    {
        $this->yAxisID = $yAxisID;
        return $this;
    }

    public function get(): array
    {
        return $this->datasets;
    }

    public function setDatasets(array $datasets): void
    {
        $this->datasets[] = $datasets;
    }
}
