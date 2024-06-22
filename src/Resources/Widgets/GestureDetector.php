<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Event\BaseEvent;

class GestureDetector extends Widget
{
    public function getType(): string
    {
        return ElementDefinitions::GestureDetector;
    }

    protected BaseEvent $onTap;

    protected Widget $child;

    public function setOnTap(BaseEvent $onTap): GestureDetector
    {
        $this->onTap = $onTap;

        return $this;
    }

    public function setChild(Widget $child): GestureDetector
    {
        $this->child = $child;

        return $this;
    }
}
