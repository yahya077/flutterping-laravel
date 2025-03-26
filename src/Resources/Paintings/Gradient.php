<?php

namespace Flutterping\Resources\Paintings;

use Flutterping\Resources\Renderable;

class Gradient extends Renderable
{
    protected string $type;

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
