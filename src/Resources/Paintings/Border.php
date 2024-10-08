<?php

namespace Flutterping\Resources\Paintings;

use Flutterping\Resources\Contracts\ColorInterface;
use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Json;

class Border extends Json
{
    public function getType(): string
    {
        return ElementDefinitions::Border;
    }

    public function __construct(
        protected ?BorderSide $top = null,
        protected ?BorderSide $right = null,
        protected ?BorderSide $bottom = null,
        protected ?BorderSide $left = null
    ) {}

    public static function all(
        ColorInterface $color,
        float $width = 1.0
    ): static {
        $side = new BorderSide($color, $width);

        return new static($side, $side, $side, $side);
    }

    public static function symmetric(
        BorderSide $vertical,
        BorderSide $horizontal
    ): static {
        return new static($vertical, $horizontal, $vertical, $horizontal);
    }

    public static function fromBorderSide(
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
