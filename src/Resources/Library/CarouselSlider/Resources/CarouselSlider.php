<?php

namespace Flutterping\Resources\Library\CarouselSlider\Resources;

use Flutterping\Resources\Library\CarouselSlider\Definitions\TypeDefinitions;
use Flutterping\Resources\Widgets\Widget;

class CarouselSlider extends Widget
{
    protected array $items = [];
    protected CarouselSliderOption $options;
    protected CarouselController $controller;

    public function setItems(array $items): self
    {
        $this->items = $items;

        return $this;
    }

    public function setOptions(CarouselSliderOption $options): self
    {
        $this->options = $options;

        return $this;
    }

    public function setController(CarouselController $controller): self
    {
        $this->controller = $controller;

        return $this;
    }

    public function getType(): string
    {
        return TypeDefinitions::CarouselSlider;
    }
}
