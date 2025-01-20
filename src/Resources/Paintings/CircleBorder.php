<?php

namespace Flutterping\Resources\Paintings;

use Flutterping\Resources\Definitions\ElementDefinitions;

class CircleBorder extends ShapeBorder
{
    protected BorderSide $side;
    protected float $eccentricity;

    public function setSide(BorderSide $side): self
    {
        $this->side = $side;

        return $this;
    }

    public function setEccentricity(float $eccentricity): self
    {
        $this->eccentricity = $eccentricity;

        return $this;
    }

    public function getType(): string
    {
        return ElementDefinitions::CircleBorder;
    }
}
