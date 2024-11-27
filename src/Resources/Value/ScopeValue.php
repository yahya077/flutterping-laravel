<?php

namespace Flutterping\Resources\Value;

use Flutterping\Resources\Json;

class ScopeValue extends AbstractValue
{
    public function __construct(string $id, string $key)
    {
        $this->key = $id.$key;
    }

    public function getType(): string
    {
        return 'ScopeValue';
    }
}
