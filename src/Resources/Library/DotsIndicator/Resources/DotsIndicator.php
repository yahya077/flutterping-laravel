<?php

namespace Flutterping\Resources\Library\DotsIndicator\Resources;

use Flutterping\Resources\Event\BaseEvent;
use Flutterping\Resources\Json;
use Flutterping\Resources\Library\DotsIndicator\Definitions\TypeDefinitions;
use Flutterping\Resources\Widgets\Widget;

class DotsIndicator extends Widget
{
    protected int $dotsCount;

    protected Json $position;

    protected bool $reversed;

    protected BaseEvent $onTap;

    public function setDotsCount(int $dotsCount): self
    {
        $this->dotsCount = $dotsCount;

        return $this;
    }

    public function setPosition(Json $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function setReversed(bool $reversed): self
    {
        $this->reversed = $reversed;

        return $this;
    }

    public function setOnTap(BaseEvent $onTap): self
    {
        $this->onTap = $onTap;

        return $this;
    }

    public function getType(): string
    {
        return TypeDefinitions::DotsIndicator;
    }
}
