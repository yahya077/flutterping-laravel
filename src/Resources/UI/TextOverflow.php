<?php

namespace Flutterping\Resources\UI;

class TextOverflow extends UI
{
    const clip = 'clip';

    const ellipsis = 'ellipsis';

    public static function clip(): TextOverflow
    {
        return new static(self::clip);
    }

    public static function ellipsis(): TextOverflow
    {
        return new static(self::ellipsis);
    }
}
