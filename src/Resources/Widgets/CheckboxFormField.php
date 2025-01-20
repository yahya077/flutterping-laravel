<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Contracts\ColorInterface;
use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Event\ActionEvent;
use Flutterping\Resources\Json;
use Flutterping\Resources\Material\InputDecoration;
use Flutterping\Resources\Paintings\BorderSide;
use Flutterping\Resources\Paintings\ShapeBorder;
use Flutterping\Resources\Validator\Validator;

class CheckboxFormField extends Widget
{
    protected string $name;

    protected mixed $initialValue;

    protected Widget|Json|null $title;

    protected Widget|Json|null $subtitle;

    protected InputDecoration $decoration;

    protected ActionEvent $onChanged;

    protected Validator $validator;

    protected bool $tristate;

    protected ColorInterface $activeColor;

    protected ColorInterface $checkColor;

    protected ColorInterface $focusColor;

    protected ColorInterface $hoverColor;

    protected float $splashRadius;

    protected bool $autofocus;

    protected ShapeBorder $shape;

    protected BorderSide $side;

    protected bool $isError;

    protected string $semanticLabel;

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
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

    public function setOnChanged(ActionEvent $onChanged): self
    {
        $this->onChanged = $onChanged;

        return $this;
    }

    public function setValidator(Validator $validator): self
    {
        $this->validator = $validator;

        return $this;
    }

    public function setTristate(bool $tristate): self
    {
        $this->tristate = $tristate;

        return $this;
    }

    public function setActiveColor(ColorInterface $activeColor): self
    {
        $this->activeColor = $activeColor;

        return $this;
    }

    public function setCheckColor(ColorInterface $checkColor): self
    {
        $this->checkColor = $checkColor;

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

    public function setSplashRadius(float $splashRadius): self
    {
        $this->splashRadius = $splashRadius;

        return $this;
    }

    public function setAutofocus(bool $autofocus): self
    {
        $this->autofocus = $autofocus;

        return $this;
    }

    public function setShape(ShapeBorder $shape): self
    {
        $this->shape = $shape;

        return $this;
    }

    public function setSide(BorderSide $side): self
    {
        $this->side = $side;

        return $this;
    }

    public function setIsError(bool $isError): self
    {
        $this->isError = $isError;

        return $this;
    }

    public function setSemanticLabel(string $semanticLabel): self
    {
        $this->semanticLabel = $semanticLabel;

        return $this;
    }

    public function setTitle(Widget|Json $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function setSubtitle(Widget|Json $subtitle): self
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    public function getType(): string
    {
        return ElementDefinitions::CheckboxFormField;
    }
}
