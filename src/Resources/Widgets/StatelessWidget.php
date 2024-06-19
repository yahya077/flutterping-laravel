<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Definitions\ElementDefinitions;

class StatelessWidget extends Widget
{
    protected string $stateId;

    protected Widget $child;

    public function setStateId(string $stateId): self
    {
        $this->stateId = $stateId;
        return $this;
    }

    public function setChild(Widget $child): self
    {
        $this->child = $child;
        return $this;
    }

    public function getType(): string
    {
        return ElementDefinitions::StatelessWidget;
    }
}
