<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Json;
use Flutterping\Resources\Paintings\BorderRadius;
use Flutterping\Resources\UI\Clip;

class ClipRRect extends Widget
{
    public function getType(): string
    {
        return ElementDefinitions::ClipRRect;
    }

    protected BorderRadius|Json $borderRadius;

    protected Clip|Json $clipBehavior;

    protected Widget|Json $child;

    public function setBorderRadius(BorderRadius|Json $borderRadius): self
    {
        $this->borderRadius = $borderRadius;

        return $this;
    }

    public function setClipBehavior(Clip|Json $clipBehavior): self
    {
        $this->clipBehavior = $clipBehavior;

        return $this;
    }

    public function setChild(Widget|Json $child): self
    {
        $this->child = $child;

        return $this;
    }
}
