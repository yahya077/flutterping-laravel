<?php

namespace Flutterping\Resources\Action;

class SubmitAction extends Action
{
    protected NetworkRequestAction $submitAction;

    protected string $formStateId;

    public function setSubmitAction(NetworkRequestAction $submitAction): self
    {
        $this->submitAction = $submitAction;

        return $this;
    }

    public function setFormStateId(string $formStateId): self
    {
        $this->formStateId = $formStateId;

        return $this;
    }

    public function getActionType(): string
    {
        return 'SubmitAction';
    }
}
