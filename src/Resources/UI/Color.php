<?php

namespace Flutterping\Resources\UI;

use Flutterping\Resources\Contracts\ColorInterface;
use Flutterping\Resources\Renderable;

class Color extends Renderable implements ColorInterface
{
    protected int $red;

    protected int $green;

    protected int $blue;

    protected int $alpha;

    public function __construct($red, $green, $blue, $alpha)
    {
        $this->red = $red;
        $this->green = $green;
        $this->blue = $blue;
        $this->alpha = $alpha;
    }

    public static function fromHex($hex): self
    {
        $hex = str_replace('#', '', $hex);
        $red = hexdec(substr($hex, 0, 2));
        $green = hexdec(substr($hex, 2, 2));
        $blue = hexdec(substr($hex, 4, 2));

        return self::fromRGB($red, $green, $blue);
    }

    public static function fromRGB($red, $green, $blue, $alpha = 255): self
    {
        return new self($red, $green, $blue, $alpha);
    }

    public static function fromRGBA($red, $green, $blue, $alpha): self
    {
        return new self($red, $green, $blue, $alpha);
    }

    public static function transparent(): self
    {
        return new self(0, 0, 0, 0);
    }

    public static function white(): self
    {
        return new self(255, 255, 255, 255);
    }

    public static function black(): self
    {
        return new self(0, 0, 0, 255);
    }

    public static function red(): self
    {
        return new self(255, 0, 0, 255);
    }

    public static function green(): self
    {
        return new self(0, 255, 0, 255);
    }

    public static function blue(): self
    {
        return new self(0, 0, 255, 255);
    }

    public static function yellow(): self
    {
        return new self(255, 255, 0, 255);
    }

    public static function cyan(): self
    {
        return new self(0, 255, 255, 255);
    }

    public static function magenta(): self
    {
        return new self(255, 0, 255, 255);
    }

    public static function orange(): self
    {
        return new self(255, 165, 0, 255);
    }

    public static function pink(): self
    {
        return new self(255, 192, 203, 255);
    }

    public static function purple(): self
    {
        return new self(128, 0, 128, 255);
    }

    public static function brown(): self
    {
        return new self(165, 42, 42, 255);
    }

    public static function grey(): self
    {
        return new self(128, 128, 128, 255);
    }

    public static function lightGrey(): self
    {
        return new self(211, 211, 211, 255);
    }

    public static function darkGrey(): self
    {
        return new self(169, 169, 169, 255);
    }

    public static function teal(): self
    {
        return new self(0, 128, 128, 255);
    }

    public static function lime(): self
    {
        return new self(0, 255, 0, 255);
    }

    public static function indigo(): self
    {
        return new self(75, 0, 130, 255);
    }

    public static function amber(): self
    {
        return new self(255, 191, 0, 255);
    }

    public static function cyanAccent(): self
    {
        return new self(0, 229, 255, 255);
    }

    public static function pinkAccent(): self
    {
        return new self(255, 64, 129, 255);
    }

    public static function purpleAccent(): self
    {
        return new self(156, 39, 176, 255);
    }

    public static function deepPurpleAccent(): self
    {
        return new self(103, 58, 183, 255);
    }

    public static function indigoAccent(): self
    {
        return new self(63, 81, 181, 255);
    }

    public static function blueAccent(): self
    {
        return new self(3, 169, 244, 255);
    }

    public static function lightBlueAccent(): self
    {
        return new self(3, 169, 244, 255);
    }

    public static function tealAccent(): self
    {
        return new self(0, 150, 136, 255);
    }

    public static function greenAccent(): self
    {
        return new self(76, 175, 80, 255);
    }

    public static function lightGreenAccent(): self
    {
        return new self(139, 195, 74, 255);
    }

    public static function limeAccent(): self
    {
        return new self(205, 220, 57, 255);
    }

    public static function yellowAccent(): self
    {
        return new self(255, 235, 59, 255);
    }

    public static function amberAccent(): self
    {
        return new self(255, 193, 7, 255);
    }

    public static function orangeAccent(): self
    {
        return new self(255, 152, 0, 255);
    }

    public static function deepOrangeAccent(): self
    {
        return new self(255, 87, 34, 255);
    }

    public static function brownAccent(): self
    {
        return new self(121, 85, 72, 255);
    }

    public static function greyAccent(): self
    {
        return new self(158, 158, 158, 255);
    }

    public static function blueGreyAccent(): self
    {
        return new self(96, 125, 139, 255);
    }
}
