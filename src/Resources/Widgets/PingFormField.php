<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Json;

class PingFormField extends Widget
{
    public function getType(): string
    {
        return ElementDefinitions::PingFormField;
    }

    protected string $name;

    protected string $scopeId;

    protected Widget|Json $field;

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function setField(Widget|Json $field): self
    {
        $this->field = $field;

        return $this;
    }

    public function setScopeId(string $scopeId): self
    {
        $this->scopeId = $scopeId;

        return $this;
    }
}
