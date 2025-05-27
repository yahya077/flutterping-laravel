<?php

namespace Flutterping\Resources\Library\Choice\Resources;

use Flutterping\Resources\Library\Choice\Resources\Contracts\ChoiceListInterface;
use Flutterping\Resources\Widgets\Widget;

class ChoiceListGrid extends Widget implements ChoiceListInterface
{
    protected bool $shrinkWrap;

    protected array $gridDelegate;

    protected string $direction;

    protected array $padding;

    protected int $columns;

    protected float $spacing;

    protected float $childAspectRatio;

    public function getType(): string
    {
        return 'ChoiceListGrid';
    }

    public function setShrinkWrap(bool $shrinkWrap): self
    {
        $this->shrinkWrap = $shrinkWrap;

        return $this;
    }

    public function setGridDelegate(array $gridDelegate): self
    {
        $this->gridDelegate = $gridDelegate;

        return $this;
    }

    public function setDirection(string $direction): self
    {
        $this->direction = $direction;

        return $this;
    }

    public function setPadding(array $padding): self
    {
        $this->padding = $padding;

        return $this;
    }

    public function setColumns(int $columns): self
    {
        $this->columns = $columns;

        return $this;
    }

    public function setSpacing(float $spacing): self
    {
        $this->spacing = $spacing;

        return $this;
    }

    public function setChildAspectRatio(float $childAspectRatio): self
    {
        $this->childAspectRatio = $childAspectRatio;

        return $this;
    }
}
