<?php

namespace Flutterping\Resources;

class Value extends Element
{
    protected string $type = 'value';
    protected mixed $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function setType(string $type)
    {
        $this->type = $type;
        return $this;
    }

    static function emptyValue(): Value
    {
        return new Value(null);
    }

    static function fromState(string $stateKey): Value
    {
        return (new Value($stateKey))->setType('state');
    }

    static function value(string $value): Value
    {
        return (new Value($value));
    }

    public function getType(): string
    {
        return $this->type;
    }
}
