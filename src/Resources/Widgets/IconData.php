<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Definitions\ElementDefinitions;

class IconData extends Widget
{
    protected int $codePoint;

    protected ?string $fontFamily;

    public function __construct(int $codePoint)
    {
        $this->codePoint = $codePoint;
    }

    public function setFontFamily(string $fontFamily): self
    {
        $this->fontFamily = $fontFamily;

        return $this;
    }

    public function getType(): string
    {
        return ElementDefinitions::IconData;
    }

    public static function home($fontFamily = 'MaterialIcons'): self
    {
        return (new IconData(0xE318))->setFontFamily($fontFamily);
    }

    public static function home_outlined($fontFamily = 'MaterialIcons'): self
    {
        return (new IconData(0xF107))->setFontFamily($fontFamily);
    }

    public static function home_filled($fontFamily = 'MaterialIcons'): self
    {
        return (new IconData(0xE319))->setFontFamily($fontFamily);
    }

    public static function menu($fontFamily = 'MaterialIcons'): self
    {
        return (new IconData(0xE5D2))->setFontFamily($fontFamily);
    }

    public static function home_repair_service($fontFamily = 'MaterialIcons'): self
    {
        return (new IconData(0xE31C))->setFontFamily($fontFamily);
    }

    public static function business($fontFamily = 'MaterialIcons'): self
    {
        return (new IconData(0xE11B))->setFontFamily($fontFamily);
    }

    public static function school($fontFamily = 'MaterialIcons'): self
    {
        return (new IconData(0xE559))->setFontFamily($fontFamily);
    }
}
