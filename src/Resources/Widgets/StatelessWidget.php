<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Json;

class StatelessWidget extends Widget
{
    protected string $stateId;

    protected Widget|Json $child;

    public function setStateId(string $stateId): self
    {
        $this->stateId = $stateId;

        return $this;
    }

    public function setChild(Widget|Json $child): self
    {
        $this->child = $child;

        return $this;
    }

    public function getType(): string
    {
        return ElementDefinitions::StatelessWidget;
    }
}
