<?php

namespace Flutterping\Resources\UI;

use Flutterping\Resources\RenderableProperty;

class AutovalidateMode extends RenderableProperty
{
    const disabled = 'disabled';

    const always = 'always';

    const onUserInteraction = 'onUserInteraction';

    public static function disabled(): AutovalidateMode
    {
        return new static(self::disabled);
    }

    public static function always(): AutovalidateMode
    {
        return new static(self::always);
    }

    public static function onUserInteraction(): AutovalidateMode
    {
        return new static(self::onUserInteraction);
    }
}
