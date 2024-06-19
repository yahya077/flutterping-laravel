<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Value;

class DynamicWidget extends Widget
{
    protected Value $value;

    public function __construct(Value $value)
    {
        $this->value = $value;
    }

    public function getValue(): Value
    {
        return $this->value;
    }

    public function getType(): string
    {
        return ElementDefinitions::DynamicWidget;
    }

    public static function fromState(string $stateKey): DynamicWidget
    {
        return new DynamicWidget(Value::fromState($stateKey));
    }
}
