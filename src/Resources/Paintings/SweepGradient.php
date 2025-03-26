<?php

namespace Flutterping\Resources\Paintings;

class SweepGradient extends Gradient
{
    protected string $type = 'SweepGradient';

    protected array $colors;

    protected array $stops;

    protected Alignment $center;

    protected float $startAngle;

    protected float $endAngle;

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

    public function setStartAngle(float $startAngle): self
    {
        $this->startAngle = $startAngle;

        return $this;
    }

    public function setEndAngle(float $endAngle): self
    {
        $this->endAngle = $endAngle;

        return $this;
    }

    public function setTileMode(TileMode $tileMode): self
    {
        $this->tileMode = $tileMode;

        return $this;
    }
}
