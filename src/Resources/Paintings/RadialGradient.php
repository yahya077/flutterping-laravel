<?php

namespace Flutterping\Resources\Paintings;

class RadialGradient extends Gradient
{
    protected string $type = 'RadialGradient';

    protected array $colors;

    protected array $stops;

    protected Alignment $center;

    protected float $radius;

    protected TileMode $tileMode;

    public function setColors(array $colors): self
    {
        $this->colors = $colors;

        return $this;
    }

    public function setStops(array $stops): self
    {
        $this->stops = $stops;

        return $this;
    }

    public function setCenter(Alignment $center): self
    {
        $this->center = $center;

        return $this;
    }

    public function setRadius(float $radius): self
    {
        $this->radius = $radius;

        return $this;
    }
}
