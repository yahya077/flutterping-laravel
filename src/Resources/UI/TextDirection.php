<?php

namespace Flutterping\Resources\UI;

class TextDirection extends UI
{
    const ltr = 'ltr';

    const rtl = 'rtl';

    public static function ltr(): TextDirection
    {
        return new static(self::ltr);
    }

    public static function rtl(): TextDirection
    {
        return new static(self::rtl);
    }
}
