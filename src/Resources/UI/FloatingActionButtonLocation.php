<?php

namespace Flutterping\Resources\UI;

use Flutterping\Resources\RenderableProperty;

class FloatingActionButtonLocation extends RenderableProperty
{
    const centerFloat = 'centerFloat';
    const centerDocked = 'centerDocked';
    const endFloat = 'endFloat';
    const endDocked = 'endDocked';
    const startFloat = 'startFloat';
    const startDocked = 'startDocked';

    public static function centerFloat(): FloatingActionButtonLocation
    {
        return new static(self::centerFloat);
    }

    public static function centerDocked(): FloatingActionButtonLocation
    {
        return new static(self::centerDocked);
    }

    public static function endFloat(): FloatingActionButtonLocation
    {
        return new static(self::endFloat);
    }

    public static function endDocked(): FloatingActionButtonLocation
    {
        return new static(self::endDocked);
    }

    public static function startFloat(): FloatingActionButtonLocation
    {
        return new static(self::startFloat);
    }

    public static function startDocked(): FloatingActionButtonLocation
    {
        return new static(self::startDocked);
    }
}
