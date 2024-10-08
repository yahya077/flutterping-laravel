<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Json;
use Flutterping\Resources\ReactiveWidgetState;

class ReactiveWidget extends Widget
{
    protected Widget|Json $initialWidget;

    protected string $stateId;

    protected string $parentStateId;

    protected ReactiveWidgetState $state;

    public function setInitialWidget(Widget|Json $initialWidget): ReactiveWidget
    {
        $this->initialWidget = $initialWidget;

        return $this;
    }

    public function setState(ReactiveWidgetState $state): ReactiveWidget
    {
        $this->state = $state;

        return $this;
    }

    public function setStateId(string $stateId): ReactiveWidget
    {
        $this->stateId = $stateId;

        return $this;
    }

    public function setParentStateId(string $parentStateId): ReactiveWidget
    {
        $this->parentStateId = $parentStateId;

        return $this;
    }

    public function getType(): string
    {
        return ElementDefinitions::ReactiveWidget;
    }
}
