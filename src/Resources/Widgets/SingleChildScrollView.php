<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Foundation\ScrollController;
use Flutterping\Resources\Json;
use Flutterping\Resources\Paintings\Axis;

class SingleChildScrollView extends Widget
{
    public function getType(): string
    {
        return ElementDefinitions::SingleChildScrollView;
    }

    protected Axis $scrollDirection;

    protected bool $reverse;

    protected Widget|Json $child;

    protected ScrollController $controller;

    public function setScrollDirection(Axis $scrollDirection): SingleChildScrollView
    {
        $this->scrollDirection = $scrollDirection;

        return $this;
    }

    public function setReverse(bool $reverse): SingleChildScrollView
    {
        $this->reverse = $reverse;

        return $this;
    }

    public function setChild(Widget|Json $child): SingleChildScrollView
    {
        $this->child = $child;

        return $this;
    }

    public function setController(ScrollController $controller): SingleChildScrollView
    {
        $this->controller = $controller;

        return $this;
    }
}
