<?php

namespace Flutterping\Resources\Paintings;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Element;

class Repeat extends Element
{
    public function getType(): string
    {
        return ElementDefinitions::Repeat;
    }

    const noRepeat = 'noRepeat';

    const repeat = 'repeat';

    const repeatX = 'repeatX';

    const repeatY = 'repeatY';

    public const values = [
        self::noRepeat,
        self::repeat,
        self::repeatX,
        self::repeatY,
    ];

    public function __construct(
        protected string $value
    )
    {
        if (!in_array($this->value, self::values)) {
            throw new \InvalidArgumentException('Invalid value for Repeat');
        }
    }

    public static function noRepeat(): Repeat
    {
        return new static(self::noRepeat);
    }

    public static function repeat(): Repeat
    {
        return new static(self::repeat);
    }

    public static function repeatX(): Repeat
    {
        return new static(self::repeatX);
    }

    public static function repeatY(): Repeat
    {
        return new static(self::repeatY);
    }
}
