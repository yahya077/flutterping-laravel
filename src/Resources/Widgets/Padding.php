<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Json;
use Flutterping\Resources\Paintings\EdgeInsetsPadding;

class Padding extends Widget
{
    public function getType(): string
    {
        return ElementDefinitions::Padding;
    }

    protected EdgeInsetsPadding|Json $padding;

    protected Widget|Json $child;

    public function setPadding(EdgeInsetsPadding|Json $padding): self
    {
        $this->padding = $padding;

        return $this;
    }

    public function setChild(Widget|Json $child): self
    {
        $this->child = $child;

        return $this;
    }
}
