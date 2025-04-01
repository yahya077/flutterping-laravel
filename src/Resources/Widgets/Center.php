<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Core\CoreDouble;
use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Json;
use Flutterping\Resources\UI\Color;
use Flutterping\Resources\UI\TextDirection;

class Center extends Widget
{
    protected CoreDouble $widthFactor;

    protected CoreDouble $heightFactor;

    protected Widget|Json $child;

    public function setWidthFactor(CoreDouble $widthFactor): self
    {
        $this->widthFactor = $widthFactor;

        return $this;
    }

    public function setHeightFactor(CoreDouble $heightFactor): self
    {
        $this->heightFactor = $heightFactor;

        return $this;
    }

    public function setChild(Widget|Json $child): self
    {
        $this->child = $child;

        return $this;
    }

    public function getType(): string
    {
        return ElementDefinitions::Center;
    }
}
