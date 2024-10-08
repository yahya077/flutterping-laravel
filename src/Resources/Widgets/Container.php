<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Core\CoreDouble;
use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Json;
use Flutterping\Resources\Paintings\BoxDecoration;
use Flutterping\Resources\Paintings\EdgeInsetsGeometry;
use Flutterping\Resources\UI\Color;

class Container extends Widget
{
    public function getType(): string
    {
        return ElementDefinitions::Container;
    }

    protected ?Color $color = null;

    protected ?BoxDecoration $decoration = null;

    protected ?EdgeInsetsGeometry $margin = null;

    protected ?EdgeInsetsGeometry $padding = null;

    protected CoreDouble $width;

    protected CoreDouble $height;

    protected Widget|Json $child;

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

    public function setWidth(CoreDouble $width): self
    {
        $this->width = $width;

        return $this;
    }

    public function setHeight(CoreDouble $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function setChild(Widget|Json $child): self
    {
        $this->child = $child;

        return $this;
    }
}
