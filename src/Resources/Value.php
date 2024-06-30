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

    public static function emptyValue(): Value
    {
        return new Value(null);
    }

    public static function fromState(string $stateKey): Value
    {
        return (new Value($stateKey))->setType('state');
    }
    // Compatibility with the old version of the package
    public static function fromNotifierVariable(NotifierVariableValue $value): Value
    {
        return (new Value($value))->setType('notifier_variable');
    }

    public static function fromScope(string $id, mixed $valueKey): Value
    {
        return (new Value([
            "id" => $id,
            "key" => $valueKey
        ]))->setType('scope');
    }

    public static function value(string $value): Value
    {
        return new Value($value);
    }

    public function getType(): string
    {
        return $this->type;
    }
}
