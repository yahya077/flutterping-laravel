<?php

namespace Flutterping\Resources\UI;

class TextDecoration extends UI
{
    const none = 'none';

    const underline = 'underline';

    const overline = 'overline';

    const lineThrough = 'lineThrough';

    public static function none(): TextDecoration
    {
        return new static(self::none);
    }

    public static function underline(): TextDecoration
    {
        return new static(self::underline);
    }

    public static function overline(): TextDecoration
    {
        return new static(self::overline);
    }

    public static function lineThrough(): TextDecoration
    {
        return new static(self::lineThrough);
    }
}
