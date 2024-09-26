<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Json;

class Visibility extends Widget
{
    public function getType(): string
    {
        return ElementDefinitions::Visibility;
    }

    protected bool $visible = true;

    protected Widget|Json $child;

    public function setVisible(bool $visible): self
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
