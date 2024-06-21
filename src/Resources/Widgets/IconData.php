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
}
