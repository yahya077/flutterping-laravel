<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Json;

class Expanded extends Widget
{
    protected Widget|Json $child;

    protected int $flex;

    public function setChild(Widget|Json $child): self
    {
        $this->child = $child;

        return $this;
    }

    public function setFlex(int $flex): self
    {
        $this->flex = $flex;

        return $this;
    }

    public function getType(): string
    {
        return ElementDefinitions::Expanded;
    }
}
