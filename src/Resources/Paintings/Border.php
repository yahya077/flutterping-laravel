<?php

namespace Flutterping\Resources\Paintings;

use Flutterping\Resources\Contracts\ColorInterface;
use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Element;

class Border extends Element
{
    public function getType(): string
    {
        return ElementDefinitions::Border;
    }
    public function __construct(
        protected BorderSide $top,
        protected BorderSide $right,
        protected BorderSide $bottom,
        protected BorderSide $left
    ) {
    }

    static public function all(
        ColorInterface $color,
        float $width = 1.0
    ): static {
        $side = new BorderSide($color, $width);
        return new static($side, $side, $side, $side);
    }

    static public function symmetric(
        BorderSide $vertical,
        BorderSide $horizontal
    ): static {
        return new static($vertical, $horizontal, $vertical, $horizontal);
    }

    static public function fromBorderSide(
        BorderSide $side
    ): static {
        return new static($side, $side, $side, $side);
    }

    public function setTop(BorderSide $top): self
    {
        $this->top = $top;

        return $this;
    }

    public function setRight(BorderSide $right): self
    {
        $this->right = $right;

        return $this;
    }

    public function setBottom(BorderSide $bottom): self
    {
        $this->bottom = $bottom;

        return $this;
    }

    public function setLeft(BorderSide $left): self
    {
        $this->left = $left;

        return $this;
    }
}
