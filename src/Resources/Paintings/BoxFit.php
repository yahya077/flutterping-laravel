<?php

namespace Flutterping\Resources\Paintings;

use Flutterping\Resources\RenderableProperty;

class BoxFit extends RenderableProperty
{
    const fill = 'fill';

    const contain = 'contain';

    const cover = 'cover';

    const fitWidth = 'fitWidth';

    const fitHeight = 'fitHeight';

    const none = 'none';

    const scaleDown = 'scaleDown';

    public static function fill(): BoxFit
    {
        return new static(self::fill);
    }

    public static function contain(): BoxFit
    {
        return new static(self::contain);
    }

    public static function cover(): BoxFit
    {
        return new static(self::cover);
    }

    public static function fitWidth(): BoxFit
    {
        return new static(self::fitWidth);
    }

    public static function fitHeight(): BoxFit
    {
        return new static(self::fitHeight);
    }

    public static function none(): BoxFit
    {
        return new static(self::none);
    }

    public static function scaleDown(): BoxFit
    {
        return new static(self::scaleDown);
    }
}
