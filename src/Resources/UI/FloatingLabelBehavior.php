<?php

namespace Flutterping\Resources\UI;

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
        if (! in_array($this->value, self::values)) {
            throw new \InvalidArgumentException('Invalid value for FloatingLabelBehavior');
        }
    }

    public static function auto(): FloatingLabelBehavior
    {
        return new static(self::auto);
    }

    public static function always(): FloatingLabelBehavior
    {
        return new static(self::always);
    }

    public static function never(): FloatingLabelBehavior
    {
        return new static(self::never);
    }
}
