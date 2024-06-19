<?php

namespace Flutterping\Resources;

use Flutterping\Resources\Action\Action;

class ReactiveWidgetState extends Renderable
{
    protected string $initialStateName;
    protected array|State $states;

    public function getType(): string
    {
        return "ReactiveWidgetState";
    }

    public function setInitialStateName(string $initialStateName): self
    {
        $this->initialStateName = $initialStateName;
        return $this;
    }

    public function setStates(array|State $states): self
    {
        $this->states = $states;
        return $this;
    }
}
