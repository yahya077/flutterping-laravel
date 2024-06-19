<?php

namespace Flutterping\Resources\UI;

use Flutterping\Resources\Renderable;

class TextDirection extends Renderable
{
    const ltr = 'ltr';

    const rtl = 'rtl';

    public const values = [
        self::ltr,
        self::rtl,
    ];

    public function __construct(
        protected string $value
    ) {
        if (! in_array($this->value, self::values)) {
            throw new \InvalidArgumentException('Invalid value for TextDirection');
        }
    }

    public static function ltr(): TextDirection
    {
        return new static(self::ltr);
    }

    public static function rtl(): TextDirection
    {
        return new static(self::rtl);
    }
}
