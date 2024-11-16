<?php

namespace Dashboards\Widgets\Traits;

trait WidgetConfigTrait
{
    protected string $navigationName = 'Home';
    protected string $navigationIcon = 'heroicon-o-home';
    protected int $navigationOrder = 1;
    protected int $navigationRow = 1;
    protected int $navigationColumn = 1;

    public function getNavigationName(): string
    {
        return $this->navigationName;
    }

    public function setNavigationName(string $navigationName): WidgetConfigTrait
    {
        $this->navigationName = $navigationName;
        return $this;
    }

    public function getNavigationIcon(): string
    {
        return $this->navigationIcon;
    }

    public function setNavigationIcon(string $navigationIcon): WidgetConfigTrait
    {
        $this->navigationIcon = $navigationIcon;
        return $this;
    }

    public function getNavigationOrder(): int
    {
        return $this->navigationOrder;
    }

    public function setNavigationOrder(int $navigationOrder): WidgetConfigTrait
    {
        $this->navigationOrder = $navigationOrder;
        return $this;
    }

    public function getNavigationRow(): int
    {
        return $this->navigationRow;
    }

    public function setNavigationRow(int $navigationRow): WidgetConfigTrait
    {
        $this->navigationRow = $navigationRow;
        return $this;
    }

    public function getNavigationColumn(): int
    {
        return $this->navigationColumn;
    }

    public function setNavigationColumn(int $navigationColumn): WidgetConfigTrait
    {
        $this->navigationColumn = $navigationColumn;
        return $this;
    }
}
