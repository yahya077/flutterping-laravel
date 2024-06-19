<?php

namespace Flutterping\Resources\UI;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Renderable;

class FloatingLabelBehavior extends Renderable
{
    const auto = 'auto';
    const always = 'always';
    const never = 'never';

    public const values = [
        self::auto,
        self::always,
        self::never,
    ];

    public function __construct(
        protected string $value
    ) {
        if (!in_array($this->value, self::values)) {
            throw new \InvalidArgumentException('Invalid value for FloatingLabelBehavior');
        }
    }

    static public function auto(): FloatingLabelBehavior
    {
        return new static(self::auto);
    }

    static public function always(): FloatingLabelBehavior
    {
        return new static(self::always);
    }

    static public function never(): FloatingLabelBehavior
    {
        return new static(self::never);
    }
}
