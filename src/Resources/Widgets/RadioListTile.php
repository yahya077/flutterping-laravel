<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Contracts\ColorInterface;
use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Event\BaseEvent;
use Flutterping\Resources\Json;
use Flutterping\Resources\Paintings\EdgeInsetsGeometry;
use Flutterping\Resources\Value\AbstractValue;

class RadioListTile extends Widget
{
    public function getType(): string
    {
        return ElementDefinitions::RadioListTile;
    }

    protected Widget|Json $title;

    protected Widget|Json $subtitle;

    protected mixed $value;

    protected ColorInterface $activeColor;

    protected BaseEvent $onChanged;

    protected EdgeInsetsGeometry $contentPadding;

    protected bool $dense;

    protected bool $isThreeLine;

    protected Json $secondary;

    protected bool $selected;

    protected ColorInterface $tileColor;

    protected ColorInterface $selectedTileColor;

    protected ColorInterface $hoverColor;

    protected float $splashRadius;

    protected AbstractValue $groupValue;

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

    public function setValue(mixed $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function setActiveColor(ColorInterface $activeColor): self
    {
        $this->activeColor = $activeColor;

        return $this;
    }

    public function setOnChanged(BaseEvent $onChanged): self
    {
        $this->onChanged = $onChanged;

        return $this;
    }

    public function setContentPadding(EdgeInsetsGeometry $contentPadding): self
    {
        $this->contentPadding = $contentPadding;

        return $this;
    }

    public function setDense(bool $dense): self
    {
        $this->dense = $dense;

        return $this;
    }

    public function setIsThreeLine(bool $isThreeLine): self
    {
        $this->isThreeLine = $isThreeLine;

        return $this;
    }

    public function setSecondary(Json $secondary): self
    {
        $this->secondary = $secondary;

        return $this;
    }

    public function setSelected(bool $selected): self
    {
        $this->selected = $selected;

        return $this;
    }

    public function setTileColor(ColorInterface $tileColor): self
    {
        $this->tileColor = $tileColor;

        return $this;
    }

    public function setSelectedTileColor(ColorInterface $selectedTileColor): self
    {
        $this->selectedTileColor = $selectedTileColor;

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

    public function setGroupValue(AbstractValue $groupValue): self
    {
        $this->groupValue = $groupValue;

        return $this;
    }
}
