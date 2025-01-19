<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Contracts\ColorInterface;
use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Event\BaseEvent;
use Flutterping\Resources\Json;
use Flutterping\Resources\Paintings\EdgeInsetsGeometry;

class ListTile extends Widget
{
    public function getType(): string
    {
        return ElementDefinitions::ListTile;
    }

    protected Widget|Json $title;

    protected Widget|Json $subTitle;

    protected Widget|Json $leading;

    protected Widget|Json $trailing;

    protected EdgeInsetsGeometry $contentPadding;

    protected bool $dense;

    protected bool $isThreeLine;

    protected bool $selected;

    protected ColorInterface $tileColor;

    protected ColorInterface $selectedTileColor;

    protected ColorInterface $hoverColor;

    protected BaseEvent $onTap;

    public function setTitle(Widget|Json $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function setSubTitle(Widget|Json $subTitle): self
    {
        $this->subTitle = $subTitle;

        return $this;
    }

    public function setLeading(Widget|Json $leading): self
    {
        $this->leading = $leading;

        return $this;
    }

    public function setTrailing(Widget|Json $trailing): self
    {
        $this->trailing = $trailing;

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

    public function setOnTap(BaseEvent $onTap): self
    {
        $this->onTap = $onTap;

        return $this;
    }
}
