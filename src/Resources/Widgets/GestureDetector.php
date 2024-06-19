<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Event\Event;

class GestureDetector extends Widget
{
    public function getType(): string
    {
        return ElementDefinitions::GestureDetector;
    }

    protected Event $onTap;

    protected Widget $child;

    public function setOnTap(Event $onTap): GestureDetector
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
