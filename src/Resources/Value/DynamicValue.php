<?php

namespace Flutterping\Resources\Value;

class DynamicValue extends AbstractValue
{
    protected mixed $value;

    public function __construct(mixed $value)
    {
        $this->value = $value;
    }

    public function getType(): string
    {
        return 'DynamicValue';
    }
}
