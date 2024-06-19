<?php

namespace Flutterping\Resources\Renderings;

use Flutterping\Resources\Renderable;

class BoxConstraints extends Renderable
{
    protected float $minWidth;
    protected float $maxWidth;
    protected float $minHeight;
    protected float $maxHeight;

    public function setMinWidth(float $minWidth): void
    {
        $this->minWidth = $minWidth;
    }

    public function setMaxWidth(float $maxWidth): void
    {
        $this->maxWidth = $maxWidth;
    }

    public function setMinHeight(float $minHeight): void
    {
        $this->minHeight = $minHeight;
    }

    public function setMaxHeight(float $maxHeight): void
    {
        $this->maxHeight = $maxHeight;
    }
}
