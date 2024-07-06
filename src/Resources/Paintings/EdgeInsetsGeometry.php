<?php

namespace Flutterping\Resources\Paintings;

use Flutterping\Resources\Json;

abstract class EdgeInsetsGeometry extends Json
{
    public ?float $left;

    public ?float $top;

    public ?float $right;

    public ?float $bottom;

    public function __construct(?float $left = null, ?float $top = null, ?float $right = null, ?float $bottom = null)
    {
        $this->left = $left;
        $this->top = $top;
        $this->right = $right;
        $this->bottom = $bottom;
    }

    public static function all(float $value): EdgeInsetsGeometry
    {
        return new static($value, $value, $value, $value);
    }

    public static function fromLTRB(?float $left = null, ?float $top = null, ?float $right = null, ?float $bottom = null): EdgeInsetsGeometry
    {
        return new static($left, $top, $right, $bottom);
    }

    public static function fromSymmetric(?float $vertical = null, ?float $horizontal = null): EdgeInsetsGeometry
    {
        return new static($horizontal, $vertical, $horizontal, $vertical);
    }
}
