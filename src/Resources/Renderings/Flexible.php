<?php

namespace Flutterping\Resources\Renderings;

use Flutterping\Resources\Json;
use Flutterping\Resources\Widgets\Widget;

class Flexible extends Json
{
    protected int $flex;
    protected FlexFit $fit;

    protected Json|Widget $child;

    public function getType(): string
    {
        return 'Flexible';
    }

    public function setFlex(int $flex): self
    {
        $this->flex = $flex;

        return $this;
    }

    public function setFit(FlexFit $fit): self
    {
        $this->fit = $fit;

        return $this;
    }

    public function setChild(Json|Widget $child): self
    {
        $this->child = $child;

        return $this;
    }
}