<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Json;

class IntrinsicHeight extends Widget
{
    public function getType(): string
    {
        return ElementDefinitions::IntrinsicHeight;
    }

    protected Widget|Json $child;

    public function setChild(Widget|Json $child): IntrinsicHeight
    {
        $this->child = $child;

        return $this;
    }
}
