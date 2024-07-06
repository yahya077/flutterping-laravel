<?php

namespace Flutterping\Resources\Value;

use Flutterping\Resources\Json;

class NotifierValue extends Json
{
    protected string $key;

    public function __construct(string $key)
    {
        $this->key = $key;
    }

    public function getType(): string
    {
        return 'NotifierValue';
    }
}
