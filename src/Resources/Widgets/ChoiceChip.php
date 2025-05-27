<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Event\ActionEvent;
use Flutterping\Resources\Json;

class ChoiceChip extends Widget
{
    protected Json $label;

    protected bool $selected;

    protected ActionEvent $onSelected;

    public function setLabel(Json $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function setSelected(bool $selected): self
    {
        $this->selected = $selected;

        return $this;
    }

    public function setOnSelected(ActionEvent $onSelected): self
    {
        $this->onSelected = $onSelected;

        return $this;
    }

    public function getType(): string
    {
        return 'ChoiceChip';
    }
}
