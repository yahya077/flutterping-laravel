<?php

namespace Flutterping\Models;

use Flutterping\Resources\Json;

abstract class Widget extends Json
{
    abstract protected function widget(): Json;

    public function getType(): string
    {
        return $this->widget()->getType();
    }

    public function toArray(): ?array
    {
        return $this->widget()->toArray();
    }
}
