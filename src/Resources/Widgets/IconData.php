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

    static function home($fontFamily = 'MaterialIcons'): self {
        return (new IconData(0xe318))->setFontFamily($fontFamily);
    }

    static function home_outlined($fontFamily = 'MaterialIcons'): self {
        return (new IconData(0xf107))->setFontFamily($fontFamily);
    }

    static function home_filled($fontFamily = 'MaterialIcons'): self {
        return (new IconData(0xe319))->setFontFamily($fontFamily);
    }

    static function menu($fontFamily = 'MaterialIcons'): self {
        return (new IconData(0xe5d2))->setFontFamily($fontFamily);
    }

    static function home_repair_service($fontFamily = 'MaterialIcons'): self {
        return (new IconData(0xe31c))->setFontFamily($fontFamily);
    }

    static function business($fontFamily = 'MaterialIcons'): self {
        return (new IconData(0xe11b))->setFontFamily($fontFamily);
    }

    static function school($fontFamily = 'MaterialIcons'): self {
        return (new IconData(0xe559))->setFontFamily($fontFamily);
    }
}
