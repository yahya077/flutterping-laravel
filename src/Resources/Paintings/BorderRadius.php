<?php

namespace Flutterping\Resources\Paintings;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Element;

class BorderRadius extends Element
{
    public function getType(): string
    {
        return ElementDefinitions::BorderRadius;
    }

    public function __construct(
        protected float $topLeft = 0.0,
        protected float $topRight = 0.0,
        protected float $bottomRight = 0.0,
        protected float $bottomLeft = 0.0,
    ) {
        //
    }

    public static function all(
        float $radius
    ): static {
        return new static($radius, $radius, $radius, $radius);
    }

    public static function symmetric(
        float $vertical,
        float $horizontal
    ): static {
        return new static($vertical, $horizontal, $vertical, $horizontal);
    }

    public static function fromRadius(
        float $radius
    ): static {
        return new static($radius, $radius, $radius, $radius);
    }

    public function setTopLeft(float $topLeft): self
    {
        $this->topLeft = $topLeft;

        return $this;
    }

    public function setTopRight(float $topRight): self
    {
        $this->topRight = $topRight;

        return $this;
    }

    public function setBottomRight(float $bottomRight): self
    {
        $this->bottomRight = $bottomRight;

        return $this;
    }

    public function setBottomLeft(float $bottomLeft): self
    {
        $this->bottomLeft = $bottomLeft;

        return $this;
    }
}
