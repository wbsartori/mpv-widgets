<?php

namespace Dashboards\Models\ApexChart;

class Grid
{
    private $show = true;
    private $borderColor = '#90A4AE';
    private $strokeDashArray = 0;
    private $position = 'back';
    private $xaxis = ["lines" => ["show" => false]];
    private $yaxis = ["lines" => ["show" => false]];
    private $row = ["colors" => "", "opacity" => 0.5];
    private $column = ["colors" => "", "opacity" => 0.5];
    private $padding = ["top" => 0, "right" => 0, "bottom" => 0, "left" => 0];

    public function get()
    {
        return [
           'grid' => [
               "show" => $this->isShow(),
               "borderColor" => $this->getBorderColor(),
               "strokeDashArray" => $this->getStrokeDashArray(),
               "position" => $this->getPosition(),
               "xaxis" => $this->getXaxis(),
               "yaxis" => $this->getYaxis(),
               "row" => $this->getRow(),
               "column" => $this->getColumn(),
               "padding" => $this->getPadding()
           ]
        ];
    }

    private function isShow(): bool
    {
        return $this->show;
    }

    public function setShow(bool $show): Grid
    {
        $this->show = $show;
        return $this;
    }

    private function getBorderColor(): string
    {
        return $this->borderColor;
    }

    public function setBorderColor(string $borderColor): Grid
    {
        $this->borderColor = $borderColor;
        return $this;
    }

    private function getStrokeDashArray(): int
    {
        return $this->strokeDashArray;
    }

    public function setStrokeDashArray(int $strokeDashArray): Grid
    {
        $this->strokeDashArray = $strokeDashArray;
        return $this;
    }

    private function getPosition(): string
    {
        return $this->position;
    }

    public function setPosition(string $position): Grid
    {
        $this->position = $position;
        return $this;
    }

    private function getXaxis(): array
    {
        return $this->xaxis;
    }

    public function setXaxis(array $xaxis): Grid
    {
        $this->xaxis = $xaxis;
        return $this;
    }

    private function getYaxis(): array
    {
        return $this->yaxis;
    }

    public function setYaxis(array $yaxis): Grid
    {
        $this->yaxis = $yaxis;
        return $this;
    }

    private function getRow(): array
    {
        return $this->row;
    }

    public function setRow(array $row): Grid
    {
        $this->row = $row;
        return $this;
    }

    private function getColumn(): array
    {
        return $this->column;
    }

    public function setColumn(array $column): Grid
    {
        $this->column = $column;
        return $this;
    }

    private function getPadding(): array
    {
        return $this->padding;
    }

    public function setPadding(array $padding): Grid
    {
        $this->padding = $padding;
        return $this;
    }
}
