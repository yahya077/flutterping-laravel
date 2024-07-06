<?php

namespace Flutterping\Resources\Value;

use Flutterping\Resources\Json;

class ScopeValue extends Json
{
    protected string $id;

    protected string $key;

    public function __construct(string $id, string $key)
    {
        $this->id = $id;
        $this->key = $key;
    }

    public function getType(): string
    {
        return 'ScopeValue';
    }
}
