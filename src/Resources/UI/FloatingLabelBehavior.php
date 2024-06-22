<?php

namespace Flutterping\Resources\UI;

class FloatingLabelBehavior extends UI
{
    const auto = 'auto';

    const always = 'always';

    const never = 'never';

    public static function auto(): FloatingLabelBehavior
    {
        return new static(self::auto);
    }

    public static function always(): FloatingLabelBehavior
    {
        return new static(self::always);
    }

    public static function never(): FloatingLabelBehavior
    {
        return new static(self::never);
    }
}
