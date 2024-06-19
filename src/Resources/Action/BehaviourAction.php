<?php

namespace Flutterping\Resources\Action;

class BehaviourAction extends Action
{
    protected string $behaviourType;

    public function setBehaviourType(string $behaviourType): self
    {
        $this->behaviourType = $behaviourType;
        return $this;
    }

    public function getActionType(): string
    {
        return 'behaviour';
    }
}
