<?php

namespace Flutterping\Resources\UI;

use Flutterping\Resources\Contracts\ColorInterface;
use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Element;

class Color extends Element implements ColorInterface
{
    public function getType(): string
    {
        return ElementDefinitions::Color;
    }

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

    static public function fromHex($hex): self
    {
        $hex = str_replace('#', '', $hex);
        $red = hexdec(substr($hex, 0, 2));
        $green = hexdec(substr($hex, 2, 2));
        $blue = hexdec(substr($hex, 4, 2));

        return self::fromRGB($red, $green, $blue);
    }

    static public function fromRGB($red, $green, $blue, $alpha = 255): self
    {
        return new self($red, $green, $blue, $alpha);
    }

    static public function fromRGBA($red, $green, $blue, $alpha): self
    {
        return new self($red, $green, $blue, $alpha);
    }
}
