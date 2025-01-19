<?php

namespace Flutterping\Resources\Action;

use Flutterping\Resources\Action\Traits\RequestableAction;

class NetworkRequestAction extends Action
{
    use RequestableAction;

    public array $onStatusCodeActions;

    public function setOnStatusCodeActions(array $onStatusCodeActions): self
    {
        $this->onStatusCodeActions = $onStatusCodeActions;

        return $this;
    }

    public function onOkAction(Action $onStatusCodeOkAction): self
    {
        $this->onStatusCodeActions['200'] = $onStatusCodeOkAction;

        return $this;
    }

    public function onForbiddenAction(Action $onStatusCodeUnauthorizedAction): self
    {
        $this->onStatusCodeActions['403'] = $onStatusCodeUnauthorizedAction;

        return $this;
    }

    public function onUnAuthorizedAction(Action $onStatusCodeUnAuthorizedAction): self
    {
        $this->onStatusCodeActions['401'] = $onStatusCodeUnAuthorizedAction;

        return $this;
    }

    public function onBadRequestAction(Action $onStatusCodeBadRequestAction): self
    {
        $this->onStatusCodeActions['400'] = $onStatusCodeBadRequestAction;

        return $this;
    }

    public function onNotFoundAction(Action $onStatusCodeNotFoundAction): self
    {
        $this->onStatusCodeActions['404'] = $onStatusCodeNotFoundAction;

        return $this;
    }

    public function onServerErrorAction(Action $onStatusCodeServerErrorAction): self
    {
        $this->onStatusCodeActions['500'] = $onStatusCodeServerErrorAction;

        return $this;
    }

    public function onStatusCodeAction(int $statusCode, Action $action): self
    {
        $this->onStatusCodeActions[$statusCode] = $action;

        return $this;
    }

    public function getActionType(): string
    {
        return 'NetworkRequestAction';
    }
}
