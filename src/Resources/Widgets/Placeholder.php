<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Contracts\ColorInterface;
use Flutterping\Resources\Core\CoreDouble;
use Flutterping\Resources\Definitions\ElementDefinitions;

class Placeholder extends Widget
{
    protected ColorInterface $color;
    protected CoreDouble $strokeWidth;
    protected CoreDouble $fallbackHeight;
    protected CoreDouble $fallbackWidth;

    public function setColor(ColorInterface $color): Placeholder
    {
        $this->color = $color;

        return $this;
    }

    public function setStrokeWidth(CoreDouble $strokeWidth): Placeholder
    {
        $this->strokeWidth = $strokeWidth;

        return $this;
    }

    public function setFallbackHeight(CoreDouble $fallbackHeight): Placeholder
    {
        $this->fallbackHeight = $fallbackHeight;

        return $this;
    }

    public function setFallbackWidth(CoreDouble $fallbackWidth): Placeholder
    {
        $this->fallbackWidth = $fallbackWidth;

        return $this;
    }

    public function getType(): string
    {
        return ElementDefinitions::Placeholder;
    }
}
