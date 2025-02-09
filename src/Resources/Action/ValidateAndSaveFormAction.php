<?php

namespace Flutterping\Resources\Action;

class ValidateAndSaveFormAction extends Action
{
    protected string $formStateId;
    public function setFormStateId(string $formStateId): self
    {
        $this->formStateId = $formStateId;

        return $this;
    }

    public function getActionType(): string
    {
        return 'ValidateAndSaveFormAction';
    }
}
