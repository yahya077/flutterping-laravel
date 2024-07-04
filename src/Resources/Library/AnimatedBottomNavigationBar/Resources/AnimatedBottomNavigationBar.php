<?php

namespace Flutterping\Resources\Library\AnimatedBottomNavigationBar\Resources;

use Flutterping\Resources\Contracts\ColorInterface;
use Flutterping\Resources\Event\ActionEvent;
use Flutterping\Resources\Library\AnimatedBottomNavigationBar\Definitions\TypeDefinitions;
use Flutterping\Resources\Widgets\IconData;
use Flutterping\Resources\Widgets\Widget;

class AnimatedBottomNavigationBar extends Widget
{
    public array|IconData $items;
    public int $activeIndex;
    protected array|ActionEvent $onTapEvents;
    public ColorInterface $inactiveColor;
    public ColorInterface $activeColor;
    public float $leftCornerRadius;
    public float $rightCornerRadius;

    public function getType(): string
    {
        return TypeDefinitions::AnimatedBottomNavigationBar;
    }

    public function setItems(array|IconData $items): self
    {
        $this->items = $items;

        return $this;
    }

    public function setActiveIndex(int $activeIndex): self
    {
        $this->activeIndex = $activeIndex;

        return $this;
    }

    public function setOnTapEvents(array|ActionEvent $onTapEvents): self
    {
        $this->onTapEvents = $onTapEvents;

        return $this;
    }

    public function setInactiveColor(ColorInterface $inactiveColor): self
    {
        $this->inactiveColor = $inactiveColor;

        return $this;
    }

    public function setActiveColor(ColorInterface $activeColor): self
    {
        $this->activeColor = $activeColor;

        return $this;
    }

    public function setLeftCornerRadius(float $leftCornerRadius): self
    {
        $this->leftCornerRadius = $leftCornerRadius;

        return $this;
    }

    public function setRightCornerRadius(float $rightCornerRadius): self
    {
        $this->rightCornerRadius = $rightCornerRadius;

        return $this;
    }
}
