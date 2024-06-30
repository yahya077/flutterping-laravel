<?php

namespace Flutterping\Resources\Paintings;

use Flutterping\Resources\Contracts\ColorInterface;
use Flutterping\Resources\Renderable;
use Flutterping\Resources\UI\Color;
use Flutterping\Resources\UI\FontStyle;
use Flutterping\Resources\UI\FontWeight;
use Flutterping\Resources\UI\TextBaseline;
use Flutterping\Resources\UI\TextDecoration;
use Flutterping\Resources\UI\TextDecorationStyle;

class TextStyle extends Renderable
{
    protected bool $inherit = true;

    protected Color $color;

    protected Color $backgroundColor;

    protected float $fontSize;

    protected FontWeight $fontWeight;

    protected string $fontFamily;

    protected FontStyle $fontStyle;

    protected TextDecoration $decoration;

    protected TextDecorationStyle $decorationStyle;

    protected float $decorationThickness;

    protected ColorInterface $decorationColor;

    protected TextBaseline $textBaseline;

    protected float $letterSpacing;

    protected float $wordSpacing;

    protected float $height;

    protected array $fontFamilyFallback;

    protected string $package;

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

    public function setFontFamily(string $fontFamily): self
    {
        $this->fontFamily = $fontFamily;

        return $this;
    }

    public function setFontStyle(FontStyle $fontStyle): self
    {
        $this->fontStyle = $fontStyle;

        return $this;
    }

    public function setDecoration(TextDecoration $decoration): self
    {
        $this->decoration = $decoration;

        return $this;
    }

    public function setDecorationStyle(TextDecorationStyle $decorationStyle): self
    {
        $this->decorationStyle = $decorationStyle;

        return $this;
    }

    public function setDecorationThickness(float $decorationThickness): self
    {
        $this->decorationThickness = $decorationThickness;

        return $this;
    }

    public function setDecorationColor(ColorInterface $decorationColor): self
    {
        $this->decorationColor = $decorationColor;

        return $this;
    }

    public function setTextBaseline(TextBaseline $textBaseline): self
    {
        $this->textBaseline = $textBaseline;

        return $this;
    }

    public function setLetterSpacing(float $letterSpacing): self
    {
        $this->letterSpacing = $letterSpacing;

        return $this;
    }

    public function setWordSpacing(float $wordSpacing): self
    {
        $this->wordSpacing = $wordSpacing;

        return $this;
    }

    public function setHeight(float $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function inherit(): self
    {
        $this->inherit = true;

        return $this;
    }

    public function color(Color $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function backgroundColor(Color $backgroundColor): self
    {
        $this->backgroundColor = $backgroundColor;

        return $this;
    }

    public function fontSize(float $fontSize): self
    {
        $this->fontSize = $fontSize;

        return $this;
    }

    public function fontWeight(FontWeight $fontWeight): self
    {
        $this->fontWeight = $fontWeight;

        return $this;
    }

    public function fontFamily(string $fontFamily): self
    {
        $this->fontFamily = $fontFamily;

        return $this;
    }

    public function fontStyle(FontStyle $fontStyle): self
    {
        $this->fontStyle = $fontStyle;

        return $this;
    }

    public function decoration(TextDecoration $decoration): self
    {
        $this->decoration = $decoration;

        return $this;
    }

    public function decorationStyle(TextDecorationStyle $decorationStyle): self
    {
        $this->decorationStyle = $decorationStyle;

        return $this;
    }

    public function decorationThickness(float $decorationThickness): self
    {
        $this->decorationThickness = $decorationThickness;

        return $this;
    }

    public function decorationColor(ColorInterface $decorationColor): self
    {
        $this->decorationColor = $decorationColor;

        return $this;
    }

    public function textBaseline(TextBaseline $textBaseline): self
    {
        $this->textBaseline = $textBaseline;

        return $this;
    }

    public function letterSpacing(float $letterSpacing): self
    {
        $this->letterSpacing = $letterSpacing;

        return $this;
    }

    public function wordSpacing(float $wordSpacing): self
    {
        $this->wordSpacing = $wordSpacing;

        return $this;
    }

    public function height(float $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function fontFamilyFallback(array $fontFamilyFallback): self
    {
        $this->fontFamilyFallback = $fontFamilyFallback;

        return $this;
    }

    public function package(string $package): self
    {
        $this->package = $package;

        return $this;
    }
}
