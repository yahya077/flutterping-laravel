<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Json;

class FractionallySizedBox extends Widget
{
    public function getType(): string
    {
        return ElementDefinitions::FractionallySizedBox;
    }

    public $widthFactor;

    public $heightFactor;

    public $child;

    public function __construct($widthFactor = null, $heightFactor = null)
    {
        $this->widthFactor = $widthFactor;
        $this->heightFactor = $heightFactor;
    }

    public function setChild(Widget|Json $child): FractionallySizedBox
    {
        $this->child = $child;

        return $this;
    }

    public static function shrink()
    {
        return new FractionallySizedBox(0, 0);
    }
}
