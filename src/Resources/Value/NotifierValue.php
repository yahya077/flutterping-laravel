<?php

namespace Flutterping\Resources\Value;

use Flutterping\Resources\Json;

class NotifierValue extends AbstractValue
{
    public function __construct(string $key)
    {
        $this->key = $key;
    }

    public function getType(): string
    {
        return 'NotifierValue';
    }
}
