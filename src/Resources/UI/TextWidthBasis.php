<?php

namespace Flutterping\Resources\UI;

class TextWidthBasis extends UI
{
    const parent = 'parent';

    const longestLine = 'longestLine';

    const maxLines = 'maxLines';

    public static function parent(): TextWidthBasis
    {
        return new static(self::parent);
    }

    public static function longestLine(): TextWidthBasis
    {
        return new static(self::longestLine);
    }

    public static function maxLines(): TextWidthBasis
    {
        return new static(self::maxLines);
    }
}
