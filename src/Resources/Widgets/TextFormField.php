<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Material\InputDecoration;
use Flutterping\Resources\Paintings\TextStyle;
use Flutterping\Resources\Renderings\TextCapitalization;
use Flutterping\Resources\Renderings\TextInputAction;
use Flutterping\Resources\Renderings\TextInputType;
use Flutterping\Resources\UI\TextDirection;

class TextFormField extends Widget
{
    protected string $name;
    protected string $formId;
    protected mixed $initialValue;
    protected InputDecoration $decoration;
    protected TextInputType $keyboardType;
    protected TextCapitalization $textCapitalization;
    protected TextInputAction $textInputAction;
    protected TextStyle $style;
    protected TextDirection $textDirection;
    protected bool $obscureText;
    protected bool $autofocus;
    protected bool $readOnly;

    public function __construct(string $name, string $formId)
    {
        $this->name = $name;
        $this->formId = $formId;
    }

    public function setInitialValue(mixed $initialValue): self
    {
        $this->initialValue = $initialValue;

        return $this;
    }

    public function setDecoration(InputDecoration $decoration): self
    {
        $this->decoration = $decoration;

        return $this;
    }

    public function setKeyboardType(TextInputType $keyboardType): self
    {
        $this->keyboardType = $keyboardType;

        return $this;
    }

    public function setTextCapitalization(TextCapitalization $textCapitalization): self
    {
        $this->textCapitalization = $textCapitalization;

        return $this;
    }

    public function setTextInputAction(TextInputAction $textInputAction): self
    {
        $this->textInputAction = $textInputAction;

        return $this;
    }

    public function setStyle(TextStyle $style): self
    {
        $this->style = $style;

        return $this;
    }

    public function setTextDirection(TextDirection $textDirection): self
    {
        $this->textDirection = $textDirection;

        return $this;
    }

    public function setObscureText(bool $obscureText): self
    {
        $this->obscureText = $obscureText;

        return $this;
    }

    public function setAutofocus(bool $autofocus): self
    {
        $this->autofocus = $autofocus;

        return $this;
    }

    public function setReadOnly(bool $readOnly): self
    {
        $this->readOnly = $readOnly;

        return $this;
    }

    public function getType(): string
    {
        return ElementDefinitions::TextFormField;
    }
}