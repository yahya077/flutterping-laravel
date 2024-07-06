<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Json;

class Form extends Widget
{
    protected string $id;

    protected string $parentStateId;

    protected array|Widget $formWidgets;

    public function __construct(string $id, array $formWidgets = [])
    {
        $this->id = $id;
        $this->formWidgets = $formWidgets;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function setFormWidgets(array $formWidgets): self
    {
        $this->formWidgets = $formWidgets;

        return $this;
    }

    public function addFormWidget(Widget|Json $formWidget): self
    {
        $this->formWidgets[] = $formWidget;

        return $this;
    }

    public function setParentStateId(string $parentStateId): self
    {
        $this->parentStateId = $parentStateId;

        return $this;
    }

    public function getType(): string
    {
        return ElementDefinitions::Form;
    }
}
