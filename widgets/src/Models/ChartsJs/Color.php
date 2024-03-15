<?php

namespace Dashboards\Models\ChartsJs;

class Color
{
    /**
     * @var string {rgba}
     */
    private $backgroundColor;

    /**
     * @var string {rgba}
     */
    private $borderColor;

    /**
     * @var string {#hexa}
     */
    private $color;

    /**
     * @param string $backgroundColor
     * @return Color
     */
    public function backgroundColor(string $backgroundColor): Color
    {
        $this->backgroundColor = $backgroundColor;
        return $this;
    }

    /**
     * @param string $borderColor
     * @return Color
     */
    public function borderColor(string $borderColor): Color
    {
        $this->borderColor = $borderColor;
        return $this;
    }

    /**
     * @param string $color
     * @return Color
     */
    public function color(string $color): Color
    {
        $this->color = $color;
        return $this;
    }
}
