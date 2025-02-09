<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Json;

class Overlay extends Widget
{
    public function getType(): string
    {
        return ElementDefinitions::Overlay;
    }

    protected Widget|Json $child;

    public function setChild(Widget|Json $child): self
    {
        $this->child = $child;
        return $this;
    }
}
