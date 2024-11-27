<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Value\NotifierValue;

class ValueListenableBuilder extends Widget
{
    protected NotifierValue $valueListenable;

    protected Widget $child;

    protected string $scopeId;

    public function setValueListenable(NotifierValue $valueListenable): self
    {
        $this->valueListenable = $valueListenable;

        return $this;
    }

    public function setChild(Widget $child): self
    {
        $this->child = $child;

        return $this;
    }

    public function setScopeId(string $scopeId): self
    {
        $this->scopeId = $scopeId;

        return $this;
    }

    public function getType(): string
    {
        return ElementDefinitions::ValueListenableBuilder;
    }
}
