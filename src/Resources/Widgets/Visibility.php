<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Json;
use Flutterping\Resources\Value\AbstractValue;
use Flutterping\Resources\Value\DynamicValue;

class Visibility extends Widget
{
    public function getType(): string
    {
        return ElementDefinitions::Visibility;
    }

    protected AbstractValue $visible;

    protected Widget|Json $child;

    public function __construct()
    {
        $this->visible = new DynamicValue(true);
    }

    public function setVisible(AbstractValue $visible): self
    {
        $this->visible = $visible;

        return $this;
    }

    public function setChild(Widget|Json $child): self
    {
        $this->child = $child;

        return $this;
    }
}
