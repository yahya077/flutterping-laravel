<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Definitions\ElementDefinitions;

class SizedBox extends Widget
{
    public function getType(): string
    {
        return ElementDefinitions::SizedBox;
    }

    public $width;

    public $height;

    public function __construct($width = null, $height = null)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public static function shrink()
    {
        return new SizedBox(0, 0);
    }
}
