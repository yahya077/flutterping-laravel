<?php

namespace Flutterping\Resources\Renderings;

use Flutterping\Resources\RenderableProperty;

class FlexFit extends RenderableProperty
{
    const tight = 'tight';

    const loose = 'loose';

    public static function tight(): FlexFit
    {
        return new static(self::tight);
    }

    public static function loose(): FlexFit
    {
        return new static(self::loose);
    }
}
