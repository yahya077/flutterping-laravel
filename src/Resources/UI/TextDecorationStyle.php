<?php

namespace Flutterping\Resources\UI;

class TextDecorationStyle extends UI
{
    const solid = 'solid';

    const double = 'double';

    const dotted = 'dotted';

    const dashed = 'dashed';

    const wavy = 'wavy';

    public static function solid(): TextDecorationStyle
    {
        return new static(self::solid);
    }

    public static function double(): TextDecorationStyle
    {
        return new static(self::double);
    }

    public static function dotted(): TextDecorationStyle
    {
        return new static(self::dotted);
    }

    public static function dashed(): TextDecorationStyle
    {
        return new static(self::dashed);
    }

    public static function wavy(): TextDecorationStyle
    {
        return new static(self::wavy);
    }
}
