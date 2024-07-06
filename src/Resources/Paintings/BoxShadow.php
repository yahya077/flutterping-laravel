<?php

namespace Flutterping\Resources\Paintings;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Json;
use Flutterping\Resources\UI\Color;

class BoxShadow extends Json
{
    public function getType(): string
    {
        return ElementDefinitions::BoxShadow;
    }

    protected BorderSide $side;

    protected Color $color;

    protected float $blurRadius;

    protected float $spreadRadius;

    public function setSide(BorderSide $side): self
    {
        $this->side = $side;

        return $this;
    }

    public function setColor(Color $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function setBlurRadius(float $blurRadius): self
    {
        $this->blurRadius = $blurRadius;

        return $this;
    }

    public function setSpreadRadius(float $spreadRadius): self
    {
        $this->spreadRadius = $spreadRadius;

        return $this;
    }
}
