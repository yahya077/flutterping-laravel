<?php

namespace Flutterping\Resources\UI;

class Clip extends UI
{
    const antiAlias = 'antiAlias';

    const hardEdge = 'hardEdge';

    const antiAliasWithSaveLayer = 'antiAliasWithSaveLayer';

    const none = 'none';

    public static function antiAlias(): Clip
    {
        return new static(self::antiAlias);
    }

    public static function hardEdge(): Clip
    {
        return new static(self::hardEdge);
    }

    public static function antiAliasWithSaveLayer(): Clip
    {
        return new static(self::antiAliasWithSaveLayer);
    }

    public static function none(): Clip
    {
        return new static(self::none);
    }
}
