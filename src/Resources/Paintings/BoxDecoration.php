<?php

namespace Flutterping\Resources\Paintings;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Element;
use Flutterping\Resources\UI\Color;

class BoxDecoration extends Element
{
    public function getType(): string
    {
        return ElementDefinitions::BoxDecoration;
    }

    protected Color $color;

    protected DecorationImage $image;

    protected Border $border;

    protected BorderRadius $borderRadius;

    /*
     * @var BoxShadow[]
     */
    protected array $boxShadow;

    public function setColor(Color $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function setImage(DecorationImage $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function setBorder(Border $border): self
    {
        $this->border = $border;

        return $this;
    }

    public function setBorderRadius(BorderRadius $borderRadius): self
    {
        $this->borderRadius = $borderRadius;

        return $this;
    }

    public function setBoxShadow(array $boxShadow): self
    {
        $this->boxShadow = $boxShadow;

        return $this;
    }
}
