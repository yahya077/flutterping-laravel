<?php

namespace Flutterping\Resources\Paintings;

use Flutterping\Resources\RenderableProperty;

class TileMode extends RenderableProperty
{
    const clamp = 'clamp';

    const repeat = 'repeat';

    const mirror = 'mirror';
    const decal = 'decal';

    public static function repeat(): TileMode
    {
        return new static(self::repeat);
    }

    public static function mirror(): TileMode
    {
        return new static(self::mirror);
    }

    public static function decal(): TileMode
    {
        return new static(self::decal);
    }

    public static function clamp(): TileMode
    {
        return new static(self::clamp);
    }
}
