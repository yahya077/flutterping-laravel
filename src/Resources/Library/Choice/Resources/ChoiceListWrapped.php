<?php

namespace Flutterping\Resources\Library\Choice\Resources;

use Flutterping\Resources\Library\Choice\Resources\Contracts\ChoiceListInterface;
use Flutterping\Resources\Widgets\Widget;

class ChoiceListWrapped extends Widget implements ChoiceListInterface
{
    protected string $direction;

    protected array $padding;

    protected float $spacing;

    protected float $runSpacing;

    protected string $clipBehavior;

    protected string $textDirection;

    protected string $verticalDirection;

    protected string $crossAxisAlignment;

    protected string $alignment;

    public function getType(): string
    {
        return 'ChoiceListWrapped';
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

    public function setSpacing(float $spacing): self
    {
        $this->spacing = $spacing;

        return $this;
    }

    public function setRunSpacing(float $runSpacing): self
    {
        $this->runSpacing = $runSpacing;

        return $this;
    }

    public function setClipBehavior(string $clipBehavior): self
    {
        $this->clipBehavior = $clipBehavior;

        return $this;
    }

    public function setTextDirection(string $textDirection): self
    {
        $this->textDirection = $textDirection;

        return $this;
    }

    public function setVerticalDirection(string $verticalDirection): self
    {
        $this->verticalDirection = $verticalDirection;

        return $this;
    }

    public function setCrossAxisAlignment(string $crossAxisAlignment): self
    {
        $this->crossAxisAlignment = $crossAxisAlignment;

        return $this;
    }

    public function setAlignment(string $alignment): self
    {
        $this->alignment = $alignment;

        return $this;
    }
}
