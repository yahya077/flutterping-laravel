<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Contracts\ColorInterface;
use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Event\ActionEvent;

class FloatingActionButton extends Widget
{
    protected ActionEvent $onPressed;
    protected Widget $child;
    protected ColorInterface $backgroundColor;
    protected ColorInterface $focusColor;
    protected ColorInterface $hoverColor;
    protected ColorInterface $splashColor;
    protected float $focusElevation;
    protected float $hoverElevation;
    protected float $highlightElevation;
    protected float $elevation;
    protected bool $disabledElevation;

    public function getType(): string
    {
        return ElementDefinitions::FloatingActionButton;
    }

    public function setOnPressed(ActionEvent $onPressed): FloatingActionButton
    {
        $this->onPressed = $onPressed;
        return $this;
    }

    public function setChild(Widget $child): FloatingActionButton
    {
        $this->child = $child;
        return $this;
    }

    public function setBackgroundColor(ColorInterface $backgroundColor): FloatingActionButton
    {
        $this->backgroundColor = $backgroundColor;
        return $this;
    }

    public function setFocusColor(ColorInterface $focusColor): FloatingActionButton
    {
        $this->focusColor = $focusColor;
        return $this;
    }

    public function setHoverColor(ColorInterface $hoverColor): FloatingActionButton
    {
        $this->hoverColor = $hoverColor;
        return $this;
    }

    public function setSplashColor(ColorInterface $splashColor): FloatingActionButton
    {
        $this->splashColor = $splashColor;
        return $this;
    }

    public function setFocusElevation(float $focusElevation): FloatingActionButton
    {
        $this->focusElevation = $focusElevation;
        return $this;
    }

    public function setHoverElevation(float $hoverElevation): FloatingActionButton
    {
        $this->hoverElevation = $hoverElevation;
        return $this;
    }

    public function setHighlightElevation(float $highlightElevation): FloatingActionButton
    {
        $this->highlightElevation = $highlightElevation;
        return $this;
    }

    public function setElevation(float $elevation): FloatingActionButton
    {
        $this->elevation = $elevation;
        return $this;
    }

    public function setDisabledElevation(bool $disabledElevation): FloatingActionButton
    {
        $this->disabledElevation = $disabledElevation;
        return $this;
    }
}
