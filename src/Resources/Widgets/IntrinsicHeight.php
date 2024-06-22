<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Definitions\ElementDefinitions;

class IntrinsicHeight extends Widget
{
    public function getType(): string
    {
        return ElementDefinitions::IntrinsicHeight;
    }

    protected Widget $child;

    public function setChild(Widget $child): IntrinsicHeight
    {
        $this->child = $child;

        return $this;
    }
}
