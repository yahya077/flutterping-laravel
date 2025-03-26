<?php

namespace Flutterping\Resources\Value;

use Flutterping\Resources\Json;

abstract class AbstractValue extends Json
{
    public string $key;

    public function setKey(string $key): self
    {
        $this->key = $key;

        return $this;
    }

    public static function fromKey($key): self
    {
        return (new static())->setKey($key);
    }
}
