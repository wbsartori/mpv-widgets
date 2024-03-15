<?php

namespace Dashboards\Models\ChartsJs;

class Datasets
{
    /**
     * @var Color
     */
    private $backgroundColor;

    /**
     * @var numeric
     */
    private $base;

    /**
     * @var numeric
     */
    private $barPercentage;

    /**
     * @var numeric|string
     */
    private $barThickness;

    /**
     * @var Color
     */
    private $borderColor;

    /**
     * @var string|boolean
     */
    private $borderSkipped;
    /**
     * @var numeric|object
     */
    private $borderWidth;
    /**
     * @var numeric|object
     */
    private $borderRadius;
    /**
     * @var numeric
     */
    private $categoryPercentage;
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
    private $grouped;
    /**
     * @var Color
     */
    private $hoverBackgroundColor;
    /**
     * @var Color
     */
    private $hoverBorderColor;
    /**
     * @var numeric
     */
    private $hoverBorderWidth;
    /**
     * @var numeric
     */
    private $hoverBorderRadius;
    /**
     * @var string
     */
    private $indexAxis;
    /**
     * @var number|'auto'
     */
    private $inflateAmount;
    /**
     * @var numeric
     */
    private $maxBarThickness;
    /**
     * @var numeric
     */
    private $minBarLength;
    /**
     * @var string
     */
    private $label;
    /**
     * @var numeric
     */
    private $order;
    /**
     * @var string
     */
    private $pointStyle;
    /**
     * @var boolean
     */
    private $skipNull;
    /**
     * @var string
     */
    private $stack;
    /**
     * @var string
     */
    private $xAxisID;
    /**
     * @var string
     */
    private $yAxisID;

    /**
     * @var array
     */
    private $datasets = [];

    /**
     * @return Datasets
     */
    public function push(): Datasets
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

    public function backgroundColor(Color $backgroundColor): Datasets
    {
        $this->backgroundColor = $backgroundColor;
        return $this;
    }

    /**
     * @param float|int|string $base
     * @return Datasets
     */
    public function base($base): Datasets
    {
        $this->base = $base;
        return $this;
    }

    /**
     * @param float|int|string $barPercentage
     * @return Datasets
     */
    public function barPercentage($barPercentage): Datasets
    {
        $this->barPercentage = $barPercentage;
        return $this;
    }

    /**
     * @param float|int|string $barThickness
     * @return Datasets
     */
    public function barThickness($barThickness): Datasets
    {
        $this->barThickness = $barThickness;
        return $this;
    }

    public function borderColor(Color $borderColor): Datasets
    {
        $this->borderColor = $borderColor;
        return $this;
    }

    /**
     * @param bool|string $borderSkipped
     * @return Datasets
     */
    public function borderSkipped($borderSkipped): Datasets
    {
        $this->borderSkipped = $borderSkipped;
        return $this;
    }

    /**
     * @param float|int|object|string $borderWidth
     * @return Datasets
     */
    public function borderWidth($borderWidth): Datasets
    {
        $this->borderWidth = $borderWidth;
        return $this;
    }

    /**
     * @param float|int|object|string $borderRadius
     * @return Datasets
     */
    public function borderRadius($borderRadius): Datasets
    {
        $this->borderRadius = $borderRadius;
        return $this;
    }

    /**
     * @param float|int|string $categoryPercentage
     * @return Datasets
     */
    public function categoryPercentage($categoryPercentage): Datasets
    {
        $this->categoryPercentage = $categoryPercentage;
        return $this;
    }

    /**
     * @param false|number|object $clip
     * @return Datasets
     */
    public function clip($clip): Datasets
    {
        $this->clip = $clip;
        return $this;
    }

    /**
     * @param array $data
     * @return Datasets
     */
    public function data(array $data): Datasets
    {
        $this->data = $data;
        return $this;
    }

    public function grouped(bool $grouped): Datasets
    {
        $this->grouped = $grouped;
        return $this;
    }

    public function hoverBackgroundColor(Color $hoverBackgroundColor): Datasets
    {
        $this->hoverBackgroundColor = $hoverBackgroundColor;
        return $this;
    }

    public function hoverBorderColor(Color $hoverBorderColor): Datasets
    {
        $this->hoverBorderColor = $hoverBorderColor;
        return $this;
    }

    /**
     * @param float|int|string $hoverBorderWidth
     * @return Datasets
     */
    public function hoverBorderWidth($hoverBorderWidth): Datasets
    {
        $this->hoverBorderWidth = $hoverBorderWidth;
        return $this;
    }

    /**
     * @param float|int|string $hoverBorderRadius
     * @return Datasets
     */
    public function hoverBorderRadius($hoverBorderRadius): Datasets
    {
        $this->hoverBorderRadius = $hoverBorderRadius;
        return $this;
    }

    public function indexAxis(string $indexAxis): Datasets
    {
        $this->indexAxis = $indexAxis;
        return $this;
    }

    public function inflateAmount(string $inflateAmount): Datasets
    {
        $this->inflateAmount = $inflateAmount;
        return $this;
    }

    /**
     * @param float|int|string $maxBarThickness
     * @return Datasets
     */
    public function maxBarThickness($maxBarThickness): Datasets
    {
        $this->maxBarThickness = $maxBarThickness;
        return $this;
    }

    /**
     * @param float|int|string $minBarLength
     * @return Datasets
     */
    public function minBarLength($minBarLength): Datasets
    {
        $this->minBarLength = $minBarLength;
        return $this;
    }

    public function label(string $label): Datasets
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @param float|int|string $order
     * @return Datasets
     */
    public function order($order): Datasets
    {
        $this->order = $order;
        return $this;
    }

    public function pointStyle(string $pointStyle): Datasets
    {
        $this->pointStyle = $pointStyle;
        return $this;
    }

    public function skipNull(bool $skipNull): Datasets
    {
        $this->skipNull = $skipNull;
        return $this;
    }

    public function stack(string $stack): Datasets
    {
        $this->stack = $stack;
        return $this;
    }

    public function xAxisID(string $xAxisID): Datasets
    {
        $this->xAxisID = $xAxisID;
        return $this;
    }

    public function yAxisID(string $yAxisID): Datasets
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
