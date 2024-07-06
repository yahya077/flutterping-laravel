<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Event\BaseEvent;
use Flutterping\Resources\Json;

abstract class ButtonStyleButton extends Widget
{
    protected ?BaseEvent $onPressed;

    protected Widget|Json $child;

    public function setOnPressed(BaseEvent $onPressed): self
    {
        $this->onPressed = $onPressed;

        return $this;
    }

    public function setChild(Widget|Json $child): self
    {
        $this->child = $child;

        return $this;
    }
}
