<?php

namespace Flutterping\Resources\Widgets;

class Icons
{
    public static function home($fontFamily = 'MaterialIcons'): IconData
    {
        return (new IconData(0xE318))->setFontFamily($fontFamily);
    }

    public static function home_outlined($fontFamily = 'MaterialIcons'): IconData
    {
        return (new IconData(0xF107))->setFontFamily($fontFamily);
    }

    public static function home_filled($fontFamily = 'MaterialIcons'): IconData
    {
        return (new IconData(0xE319))->setFontFamily($fontFamily);
    }

    public static function menu($fontFamily = 'MaterialIcons'): IconData
    {
        return (new IconData(0xE5D2))->setFontFamily($fontFamily);
    }

    public static function home_repair_service($fontFamily = 'MaterialIcons'): IconData
    {
        return (new IconData(0xE31C))->setFontFamily($fontFamily);
    }

    public static function business($fontFamily = 'MaterialIcons'): IconData
    {
        return (new IconData(0xE11B))->setFontFamily($fontFamily);
    }

    public static function school($fontFamily = 'MaterialIcons'): IconData
    {
        return (new IconData(0xE559))->setFontFamily($fontFamily);
    }

    public static function location_on($fontFamily = 'MaterialIcons'): IconData
    {
        return (new IconData(0xe3ab))->setFontFamily($fontFamily);
    }

    public static function arrow_forward_ios($fontFamily = 'MaterialIcons'): IconData
    {
        return (new IconData(0xe09c))->setFontFamily($fontFamily);
    }
}
