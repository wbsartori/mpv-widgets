<?php

declare(strict_types=1);

namespace Dashboards\Widgets\Traits;

trait WidgetConfigTrait
{
    protected ?string $navigationIcon;
    protected ?int $navigationOrder;
    protected ?int $navigationRow;
    protected ?int $navigationColumn;


    public function getNavigationIcon(): ?string
    {
        return $this->navigationIcon ?? 'heroicon-o-home';
    }

    public function getNavigationOrder(): ?int
    {
        return $this->navigationOrder ?? 1;
    }

    public function getNavigationRow(): ?int
    {
        return $this->navigationRow ?? 1;
    }

    public function getNavigationColumn(): ?int
    {
        return $this->navigationColumn ?? 1;
    }
    public function setNavigationIcon(?string $navigationIcon): self
    {
        $this->navigationIcon = $navigationIcon;
        return $this;
    }

    public function setNavigationOrder(?int $navigationOrder): self
    {
        $this->navigationOrder = $navigationOrder;
        return $this;
    }

    public function setNavigationRow(?int $navigationRow): self
    {
        $this->navigationRow = $navigationRow;
        return $this;
    }

    public function setNavigationColumn(?int $navigationColumn): self
    {
        $this->navigationColumn = $navigationColumn;
        return $this;
    }
}