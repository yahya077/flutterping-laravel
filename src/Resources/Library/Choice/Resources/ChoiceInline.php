<?php

namespace Flutterping\Resources\Library\Choice\Resources;

use Flutterping\Resources\Json;
use Flutterping\Resources\Widgets\Widget;

class ChoiceInline extends Widget
{
    protected int $itemCount;

    protected array $options;

    protected bool $multiple;

    protected Json $buildableItem;

    public function setItemCount(int $itemCount): self
    {
        $this->itemCount = $itemCount;

        return $this;
    }

    public function setOptions(array $options): self
    {
        $this->options = $options;

        return $this;
    }

    public function setMultiple(bool $multiple): self
    {
        $this->multiple = $multiple;

        return $this;
    }

    public function setBuildableItem(Json $buildableItem): self
    {
        $this->buildableItem = $buildableItem;

        return $this;
    }

    public function getType(): string
    {
        return 'ChoiceInline';
    }
}
