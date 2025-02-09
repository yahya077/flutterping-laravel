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

    // TODO make conditional widget instead of elseChild
    protected Widget|Json $elseChild;

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

    public function setElseChild(Widget|Json $elseChild): self
    {
        $this->elseChild = $elseChild;

        return $this;
    }
}
