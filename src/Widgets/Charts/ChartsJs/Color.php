<?php

declare(strict_types=1);

namespace Dashboards\Widgets\Charts\ChartsJs;

use Dashboards\Widgets\Interfaces\ColorInterface;

class Color implements ColorInterface
{
    /**
     * @var string {rgba}
     */
    private string $backgroundColor;

    /**
     * @var string {rgba}
     */
    private string $borderColor;

    /**
     * @var string {#hexa}
     */
    private $color;

    /**
     * @param string $backgroundColor
     * @return Color
     */
    public function backgroundColor(string $backgroundColor): ColorInterface
    {
        $this->backgroundColor = $backgroundColor;
        return $this;
    }

    /**
     * @param string $borderColor
     * @return Color
     */
    public function borderColor(string $borderColor): ColorInterface
    {
        $this->borderColor = $borderColor;
        return $this;
    }

    /**
     * @param string $color
     * @return Color
     */
    public function color(string $color): ColorInterface
    {
        $this->color = $color;
        return $this;
    }
}
