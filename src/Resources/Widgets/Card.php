<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Contracts\ColorInterface;
use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Json;
use Flutterping\Resources\Paintings\EdgeInsetsMargin;
use Flutterping\Resources\Paintings\ShapeBorder;
use Flutterping\Resources\UI\Clip;

class Card extends Widget
{
    protected Widget|Json $child;

    protected ColorInterface $color;

    protected float $elevation;

    protected ColorInterface $shadowColor;

    protected ColorInterface $surfaceTintColor;

    protected Clip $clipBehavior;

    protected bool $semanticContainer;

    protected bool $borderOnForeground;

    protected EdgeInsetsMargin $margin;

    protected ShapeBorder $shape;

    public function getType(): string
    {
        return ElementDefinitions::Card;
    }

    public function setChild(Widget|Json $child): Card
    {
        $this->child = $child;

        return $this;
    }

    public function setColor(ColorInterface $color): Card
    {
        $this->color = $color;

        return $this;
    }

    public function setElevation(float $elevation): Card
    {
        $this->elevation = $elevation;

        return $this;
    }

    public function setShadowColor(ColorInterface $shadowColor): Card
    {
        $this->shadowColor = $shadowColor;

        return $this;
    }

    public function setSurfaceTintColor(ColorInterface $surfaceTintColor): Card
    {
        $this->surfaceTintColor = $surfaceTintColor;

        return $this;
    }

    public function setClipBehavior(Clip $clipBehavior): Card
    {
        $this->clipBehavior = $clipBehavior;

        return $this;
    }

    public function setSemanticContainer(bool $semanticContainer): Card
    {
        $this->semanticContainer = $semanticContainer;

        return $this;
    }

    public function setBorderOnForeground(bool $borderOnForeground): Card
    {
        $this->borderOnForeground = $borderOnForeground;

        return $this;
    }

    public function setMargin(EdgeInsetsMargin $margin): Card
    {
        $this->margin = $margin;

        return $this;
    }

    public function setShape(ShapeBorder $shape): Card
    {
        $this->shape = $shape;

        return $this;
    }
}
