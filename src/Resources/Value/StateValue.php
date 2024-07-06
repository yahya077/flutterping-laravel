<?php

namespace Flutterping\Resources\Value;

use Flutterping\Resources\Json;

class StateValue extends Json
{
    protected string $key;

    public function __construct(string $key)
    {
        $this->key = $key;
    }

    public function getType(): string
    {
        return 'StateValue';
    }
}
