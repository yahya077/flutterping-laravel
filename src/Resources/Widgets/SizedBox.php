<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Core\CoreDouble;
use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Json;

class SizedBox extends Widget
{
    public function getType(): string
    {
        return ElementDefinitions::SizedBox;
    }

    public ?CoreDouble $width;

    public ?CoreDouble $height;

    public $child;

    public function __construct(?CoreDouble $width = null, ?CoreDouble $height = null)
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
        return new SizedBox(new CoreDouble(0), new CoreDouble(0));
    }
}
