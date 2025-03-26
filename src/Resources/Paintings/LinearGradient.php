<?php

namespace Flutterping\Resources\Paintings;

class LinearGradient extends Gradient
{
    protected string $type = 'LinearGradient';

    protected array $colors;

    protected array $stops;

    protected Alignment $begin;

    protected Alignment $end;

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

    public function setBegin(Alignment $begin): self
    {
        $this->begin = $begin;

        return $this;
    }

    public function setEnd(Alignment $end): self
    {
        $this->end = $end;

        return $this;
    }
}
