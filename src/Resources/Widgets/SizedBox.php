<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Json;

class SizedBox extends Widget
{
    public function getType(): string
    {
        return ElementDefinitions::SizedBox;
    }

    public $width;

    public $height;

    public $child;

    public function __construct($width = null, $height = null)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function setChild(Widget|Json $child): SizedBox
    {
        $this->child = $child;

        return $this;
    }

    public static function shrink()
    {
        return new SizedBox(0, 0);
    }
}
