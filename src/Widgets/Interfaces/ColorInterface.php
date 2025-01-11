<?php

declare(strict_types=1);

namespace Dashboards\Widgets\Interfaces;

use Dashboards\Widgets\Charts\ChartsJs\Color;

interface ColorInterface
{
    /**
     * @param string $backgroundColor
     * @return Color
     */
    public function backgroundColor(string $backgroundColor): ColorInterface;

    /**
     * @param string $borderColor
     * @return Color
     */
    public function borderColor(string $borderColor): ColorInterface;

    /**
     * @param string $color
     * @return Color
     */
    public function color(string $color): ColorInterface;
}
