<?php

namespace Flutterping\Resources\Value;

class EvalValue extends AbstractValue
{
    public function __construct(string $key)
    {
        $this->key = $key;
    }

    public function getType(): string
    {
        return 'EvalValue';
    }
}
