<?php

namespace Flutterping\Resources\Paintings;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Element;
use Flutterping\Resources\UI\Color;
use Flutterping\Resources\UI\FontWeight;

class TextStyle extends Element
{
    public function getType(): string
    {
        return ElementDefinitions::TextStyle;
    }

    protected bool $inherit = true;

    protected Color $color;

    protected Color $backgroundColor;

    protected float $fontSize;

    protected FontWeight $fontWeight;

    public function setInherit(bool $inherit): self
    {
        $this->inherit = $inherit;

        return $this;
    }

    public function setColor(Color $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function setBackgroundColor(Color $backgroundColor): self
    {
        $this->backgroundColor = $backgroundColor;

        return $this;
    }

    public function setFontSize(float $fontSize): self
    {
        $this->fontSize = $fontSize;

        return $this;
    }

    public function setFontWeight(FontWeight $fontWeight): self
    {
        $this->fontWeight = $fontWeight;

        return $this;
    }
}
