<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Event\BaseEvent;
use Flutterping\Resources\Json;

class GestureDetector extends Widget
{
    public function getType(): string
    {
        return ElementDefinitions::GestureDetector;
    }

    protected BaseEvent $onTap;

    protected Widget|Json $child;

    public function setOnTap(BaseEvent $onTap): GestureDetector
    {
        $this->onTap = $onTap;

        return $this;
    }

    public function setChild(Widget|Json $child): GestureDetector
    {
        $this->child = $child;

        return $this;
    }
}
