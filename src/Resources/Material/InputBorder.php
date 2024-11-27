<?php

namespace Flutterping\Resources\Material;

use Flutterping\Resources\Json;
use Flutterping\Resources\Paintings\BorderSide;

abstract class InputBorder extends Json
{
    protected BorderSide $borderSide;

    public function setBorderSide($borderSide): self
    {
        $this->borderSide = $borderSide;

        return $this;
    }
}
