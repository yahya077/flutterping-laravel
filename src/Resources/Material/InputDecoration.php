<?php

namespace Flutterping\Resources\Material;

use Flutterping\Resources\Contracts\ColorInterface;
use Flutterping\Resources\Paintings\EdgeInsetsPadding;
use Flutterping\Resources\Paintings\TextStyle;
use Flutterping\Resources\Renderable;
use Flutterping\Resources\Renderings\BoxConstraints;
use Flutterping\Resources\UI\FloatingLabelBehavior;
use Flutterping\Resources\UI\TextDirection;
use Flutterping\Resources\Widgets\Widget;

class InputDecoration extends Renderable
{
    protected Widget $icon;
    protected ColorInterface $color;
    protected Widget $label;
    protected string $labelText;
    protected TextStyle $labelStyle;
    protected TextStyle $floatingLabelStyle;
    protected string $helperText;
    protected TextStyle $helperStyle;
    protected int $helperMaxLines;
    protected string $hintText;
    protected TextStyle $hintStyle;
    protected TextDirection $hintTextDirection;
    protected int $hintMaxLines;
    protected Widget $error;
    protected string $errorText;
    protected TextStyle $errorStyle;
    protected int $errorMaxLines;
    protected Widget $prefix;
    protected FloatingLabelBehavior $floatingLabelBehavior;
    protected FloatingLabelBehavior $floatingLabelAlignment;
    protected bool $isDense;
    protected EdgeInsetsPadding $contentPadding;
    protected bool $isCollapsed;
    protected Widget $prefixIcon;
    protected BoxConstraints $prefixIconConstraints;
    protected string $prefixText;
    protected TextStyle $prefixStyle;
    protected ColorInterface $prefixIconColor;
    protected Widget $suffixIcon;
    protected Widget $suffix;
    protected string $suffixText;
    protected TextStyle $suffixStyle;
    protected ColorInterface $suffixIconColor;
    protected BoxConstraints $suffixIconConstraints;
    protected Widget $counter;
    protected TextStyle $counterStyle;
    protected bool $filled;
    protected ColorInterface $fillColor;
    protected ColorInterface $focusColor;
    protected ColorInterface $hoverColor;
    protected InputBorder $errorBorder;
    protected InputBorder $focusedBorder;
    protected InputBorder $focusedErrorBorder;
    protected InputBorder $disabledBorder;
    protected InputBorder $enabledBorder;
    protected InputBorder $border;
    protected bool $enabled;
    protected string $semanticCounterText;
    protected bool $alignLabelWithHint;
    protected BoxConstraints $constraints;

    public function setIcon(Widget $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    public function setColor(ColorInterface $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function setLabel(Widget $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function setLabelText(string $labelText): self
    {
        $this->labelText = $labelText;

        return $this;
    }

    public function setLabelStyle(TextStyle $labelStyle): self
    {
        $this->labelStyle = $labelStyle;

        return $this;
    }

    public function setFloatingLabelStyle(TextStyle $floatingLabelStyle): self
    {
        $this->floatingLabelStyle = $floatingLabelStyle;

        return $this;
    }

    public function setHelperText(string $helperText): self
    {
        $this->helperText = $helperText;

        return $this;
    }

    public function setHelperStyle(TextStyle $helperStyle): self
    {
        $this->helperStyle = $helperStyle;

        return $this;
    }

    public function setHelperMaxLines(int $helperMaxLines): self
    {
        $this->helperMaxLines = $helperMaxLines;

        return $this;
    }

    public function setHintText(string $hintText): self
    {
        $this->hintText = $hintText;

        return $this;
    }

    public function setHintStyle(TextStyle $hintStyle): self
    {
        $this->hintStyle = $hintStyle;

        return $this;
    }

    public function setHintTextDirection(TextDirection $hintTextDirection): self
    {
        $this->hintTextDirection = $hintTextDirection;

        return $this;
    }

    public function setHintMaxLines(int $hintMaxLines): self
    {
        $this->hintMaxLines = $hintMaxLines;

        return $this;
    }

    public function setError(Widget $error): self
    {
        $this->error = $error;

        return $this;
    }

    public function setErrorText(string $errorText): self
    {
        $this->errorText = $errorText;

        return $this;
    }

    public function setErrorStyle(TextStyle $errorStyle): self
    {
        $this->errorStyle = $errorStyle;

        return $this;
    }

    public function setErrorMaxLines(int $errorMaxLines): self
    {
        $this->errorMaxLines = $errorMaxLines;

        return $this;
    }

    public function setPrefix(Widget $prefix): self
    {
        $this->prefix = $prefix;

        return $this;
    }

    public function setFloatingLabelBehavior(FloatingLabelBehavior $floatingLabelBehavior): self
    {
        $this->floatingLabelBehavior = $floatingLabelBehavior;

        return $this;
    }

    public function setFloatingLabelAlignment(FloatingLabelBehavior $floatingLabelAlignment): self
    {
        $this->floatingLabelAlignment = $floatingLabelAlignment;

        return $this;
    }

    public function setIsDense(bool $isDense): self
    {
        $this->isDense = $isDense;

        return $this;
    }

    public function setContentPadding(EdgeInsetsPadding $contentPadding): self
    {
        $this->contentPadding = $contentPadding;

        return $this;
    }

    public function setIsCollapsed(bool $isCollapsed): self
    {
        $this->isCollapsed = $isCollapsed;

        return $this;
    }

    public function setPrefixIcon(Widget $prefixIcon): self
    {
        $this->prefixIcon = $prefixIcon;

        return $this;
    }

    public function setPrefixIconConstraints(BoxConstraints $prefixIconConstraints): self
    {
        $this->prefixIconConstraints = $prefixIconConstraints;

        return $this;
    }

    public function setPrefixText(string $prefixText): self
    {
        $this->prefixText = $prefixText;

        return $this;
    }

    public function setPrefixStyle(TextStyle $prefixStyle): self
    {
        $this->prefixStyle = $prefixStyle;

        return $this;
    }

    public function setPrefixIconColor(ColorInterface $prefixIconColor): self
    {
        $this->prefixIconColor = $prefixIconColor;

        return $this;
    }

    public function setSuffixIcon(Widget $suffixIcon): self
    {
        $this->suffixIcon = $suffixIcon;

        return $this;
    }

    public function setSuffix(Widget $suffix): self
    {
        $this->suffix = $suffix;

        return $this;
    }

    public function setSuffixText(string $suffixText): self
    {
        $this->suffixText = $suffixText;

        return $this;
    }

    public function setSuffixStyle(TextStyle $suffixStyle): self
    {
        $this->suffixStyle = $suffixStyle;

        return $this;
    }

    public function setSuffixIconColor(ColorInterface $suffixIconColor): self
    {
        $this->suffixIconColor = $suffixIconColor;

        return $this;
    }

    public function setSuffixIconConstraints(BoxConstraints $suffixIconConstraints): self
    {
        $this->suffixIconConstraints = $suffixIconConstraints;

        return $this;
    }

    public function setCounter(Widget $counter): self
    {
        $this->counter = $counter;

        return $this;
    }

    public function setCounterStyle(TextStyle $counterStyle): self
    {
        $this->counterStyle = $counterStyle;

        return $this;
    }

    public function setFilled(bool $filled): self
    {
        $this->filled = $filled;

        return $this;
    }

    public function setFillColor(ColorInterface $fillColor): self
    {
        $this->fillColor = $fillColor;

        return $this;
    }

    public function setFocusColor(ColorInterface $focusColor): self
    {
        $this->focusColor = $focusColor;

        return $this;
    }

    public function setHoverColor(ColorInterface $hoverColor): self
    {
        $this->hoverColor = $hoverColor;

        return $this;
    }

    public function setErrorBorder(InputBorder $errorBorder): self
    {
        $this->errorBorder = $errorBorder;

        return $this;
    }

    public function setFocusedBorder(InputBorder $focusedBorder): self
    {
        $this->focusedBorder = $focusedBorder;

        return $this;
    }

    public function setFocusedErrorBorder(InputBorder $focusedErrorBorder): self
    {
        $this->focusedErrorBorder = $focusedErrorBorder;

        return $this;
    }

    public function setDisabledBorder(InputBorder $disabledBorder): self
    {
        $this->disabledBorder = $disabledBorder;

        return $this;
    }

    public function setEnabledBorder(InputBorder $enabledBorder): self
    {
        $this->enabledBorder = $enabledBorder;

        return $this;
    }

    public function setBorder(InputBorder $border): self
    {
        $this->border = $border;

        return $this;
    }

    public function setEnabled(bool $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }

    public function setSemanticCounterText(string $semanticCounterText): self
    {
        $this->semanticCounterText = $semanticCounterText;

        return $this;
    }

    public function setAlignLabelWithHint(bool $alignLabelWithHint): self
    {
        $this->alignLabelWithHint = $alignLabelWithHint;

        return $this;
    }

    public function setConstraints(BoxConstraints $constraints): self
    {
        $this->constraints = $constraints;

        return $this;
    }
}
