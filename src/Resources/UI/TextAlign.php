<?php

namespace Flutterping\Resources\UI;

class TextAlign extends UI
{
    const left = 'left';

    const right = 'right';

    const center = 'center';

    const justify = 'justify';

    const start = 'start';

    const end = 'end';

    public static function left(): TextAlign
    {
        return new static(self::left);
    }

    public static function right(): TextAlign
    {
        return new static(self::right);
    }

    public static function center(): TextAlign
    {
        return new static(self::center);
    }

    public static function justify(): TextAlign
    {
        return new static(self::justify);
    }

    public static function start(): TextAlign
    {
        return new static(self::start);
    }

    public static function end(): TextAlign
    {
        return new static(self::end);
    }
}
