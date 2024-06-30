<?php

namespace Flutterping\Resources\UI;

class TextBaseline extends UI
{
    const alphabetic = 'alphabetic';

    const ideographic = 'ideographic';

    public static function alphabetic(): TextBaseline
    {
        return new static(self::alphabetic);
    }

    public static function ideographic(): TextBaseline
    {
        return new static(self::ideographic);
    }
}
