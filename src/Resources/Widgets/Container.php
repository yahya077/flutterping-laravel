<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Paintings\BoxDecoration;
use Flutterping\Resources\Paintings\EdgeInsets;
use Flutterping\Resources\Paintings\EdgeInsetsGeometry;
use Flutterping\Resources\UI\Color;

class Container extends Widget
{
    public function getType(): string
    {
        return ElementDefinitions::Container;
    }

    protected Color|null $color = null;
    protected BoxDecoration|null $decoration = null;
    protected EdgeInsetsGeometry|null $margin = null;
    protected EdgeInsetsGeometry|null $padding = null;
    protected float|null $width = null;
    protected float|null $height = null;
    protected Widget $child;

    public function setColor(Color $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function setDecoration(BoxDecoration $decoration): self
    {
        $this->decoration = $decoration;

        return $this;
    }

    public function setMargin(EdgeInsetsGeometry $margin): self
    {
        $this->margin = $margin;

        return $this;
    }

    public function setPadding(EdgeInsetsGeometry $padding): self
    {
        $this->padding = $padding;

        return $this;
    }

    public function setWidth(float $width): self
    {
        $this->width = $width;

        return $this;
    }

    public function setHeight(float $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function setChild(Widget $child): self
    {
        $this->child = $child;

        return $this;
    }
}
