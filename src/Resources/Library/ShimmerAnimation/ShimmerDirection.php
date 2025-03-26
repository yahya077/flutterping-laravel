<?php

namespace Flutterping\Resources\Library\ShimmerAnimation;

use Flutterping\Resources\RenderableProperty;

class ShimmerDirection extends RenderableProperty
{
    const ltr = 'ltr';
    const rtl = 'rtl';
    const ttb = 'ttb';
    const btt = 'btt';

    public static function ltr(): ShimmerDirection
    {
        return new static(self::ltr);
    }

    public static function rtl(): ShimmerDirection
    {
        return new static(self::rtl);
    }

    public static function ttb(): ShimmerDirection
    {
        return new static(self::ttb);
    }

    public static function btt(): ShimmerDirection
    {
        return new static(self::btt);
    }
}
