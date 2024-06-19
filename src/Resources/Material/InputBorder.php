<?php

namespace Flutterping\Resources\Material;

use Flutterping\Resources\Paintings\BorderSide;
use Flutterping\Resources\Renderable;

class InputBorder extends Renderable
{
    protected BorderSide $borderSide;

    public function setBorderSide($borderSide): void
    {
        $this->borderSide = $borderSide;
    }
}
