<?php

namespace Flutterping\Resources\UI;

class BorderStyle extends UI
{
    const none = 'none';

    const solid = 'solid';

    public static function none(): BorderStyle
    {
        return new static(self::none);
    }

    public static function solid(): BorderStyle
    {
        return new static(self::solid);
    }
}
