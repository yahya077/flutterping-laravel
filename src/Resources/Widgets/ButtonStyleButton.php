<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Event\BaseEvent;

abstract class ButtonStyleButton extends Widget
{
    protected ?BaseEvent $onPressed;

    protected Widget $child;

    public function setOnPressed(BaseEvent $onPressed): self
    {
        $this->onPressed = $onPressed;

        return $this;
    }

    public function setChild(Widget $child): self
    {
        $this->child = $child;

        return $this;
    }
}
