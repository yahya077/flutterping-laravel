<?php

namespace Flutterping\Resources\UI;

class FontStyle extends UI
{
    const italic = 'italic';
    const normal = 'normal';

    public static function italic(): FontStyle
    {
        return new static(self::italic);
    }

    public static function normal(): FontStyle
    {
        return new static(self::normal);
    }
}
