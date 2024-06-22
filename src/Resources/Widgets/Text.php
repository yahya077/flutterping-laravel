<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Paintings\TextStyle;
use Flutterping\Resources\UI\TextAlign;
use Flutterping\Resources\UI\TextDirection;
use Flutterping\Resources\UI\TextOverflow;
use Flutterping\Resources\UI\TextWidthBasis;

class Text extends Widget
{
    public function getType(): string
    {
        return ElementDefinitions::Text;
    }

    protected string $text;
    protected TextStyle $style;
    protected TextAlign $textAlign;
    protected TextDirection $textDirection;
    protected bool $softWrap;
    protected TextOverflow $overflow;
    protected int $maxLines;
    protected float $textScaleFactor;
    protected TextWidthBasis $textWidthBasis;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function setStyle(TextStyle $style): self
    {
        $this->style = $style;

        return $this;
    }

    public function setTextAlign(TextAlign $textAlign): self
    {
        $this->textAlign = $textAlign;

        return $this;
    }

    public function setTextDirection(TextDirection $textDirection): self
    {
        $this->textDirection = $textDirection;

        return $this;
    }

    public function setSoftWrap(bool $softWrap): self
    {
        $this->softWrap = $softWrap;

        return $this;
    }

    public function setOverflow(TextOverflow $overflow): self
    {
        $this->overflow = $overflow;

        return $this;
    }

    public function setMaxLines(int $maxLines): self
    {
        $this->maxLines = $maxLines;

        return $this;
    }

    public function setTextScaleFactor(float $textScaleFactor): self
    {
        $this->textScaleFactor = $textScaleFactor;

        return $this;
    }

    public function setTextWidthBasis(TextWidthBasis $textWidthBasis): self
    {
        $this->textWidthBasis = $textWidthBasis;

        return $this;
    }
}
