<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Contracts\ColorInterface;
use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Paintings\EdgeInsetsPadding;
use Flutterping\Resources\UI\Clip;

class BottomAppBar extends Widget
{
    public function getType(): string
    {
        return ElementDefinitions::BottomAppBar;
    }

    protected Widget $child;
    protected ColorInterface $color;
    protected float $elevation;
    protected Clip $clipBehavior;
    protected float $notchMargin;
    protected EdgeInsetsPadding $padding;
    protected ColorInterface $surfaceTintColor;
    protected ColorInterface $shadowColor;
    protected float $height;

    public function setChild(Widget $child): BottomAppBar
    {
        $this->child = $child;

        return $this;
    }

    public function setColor(ColorInterface $color): BottomAppBar
    {
        $this->color = $color;

        return $this;
    }

    public function setElevation(float $elevation): BottomAppBar
    {
        $this->elevation = $elevation;

        return $this;
    }

    public function setClipBehavior(Clip $clipBehavior): BottomAppBar
    {
        $this->clipBehavior = $clipBehavior;

        return $this;
    }

    public function setNotchMargin(float $notchMargin): BottomAppBar
    {
        $this->notchMargin = $notchMargin;

        return $this;
    }

    public function setPadding(EdgeInsetsPadding $padding): BottomAppBar
    {
        $this->padding = $padding;

        return $this;
    }

    public function setSurfaceTintColor(ColorInterface $surfaceTintColor): BottomAppBar
    {
        $this->surfaceTintColor = $surfaceTintColor;

        return $this;
    }

    public function setShadowColor(ColorInterface $shadowColor): BottomAppBar
    {
        $this->shadowColor = $shadowColor;

        return $this;
    }

    public function setHeight(float $height): BottomAppBar
    {
        $this->height = $height;

        return $this;
    }
}
