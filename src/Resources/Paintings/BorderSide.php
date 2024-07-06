<?php

namespace Flutterping\Resources\Paintings;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Json;
use Flutterping\Resources\UI\Color;

class BorderSide extends Json
{
    public function getType(): string
    {
        return ElementDefinitions::BorderSide;
    }

    protected Color $color;

    protected float $width;

    public function __construct(Color $color, float $width = 1.0)
    {
        $this->color = $color;
        $this->width = $width;

        return $this;
    }
}
