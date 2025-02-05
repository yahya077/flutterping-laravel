<?php

namespace Flutterping\Resources\Paintings;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Json;
use Flutterping\Resources\UI\BorderStyle;
use Flutterping\Resources\UI\Color;

class BorderSide extends Json
{
    public function getType(): string
    {
        return ElementDefinitions::BorderSide;
    }

    protected Color $color;

    protected float $width;

    protected BorderStyle $style;

    public function __construct(Color $color, float $width = 1.0)
    {
        $this->color = $color;
        $this->width = $width;

        return $this;
    }

    public function setStyle(BorderStyle $style): self
    {
        $this->style = $style;

        return $this;
    }

    public static function none(): self
    {
        return (new self(Color::transparent(), 0.0))->setStyle(BorderStyle::none());
    }
}
