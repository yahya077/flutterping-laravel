<?php

namespace Flutterping\Resources\Action;

use Flutterping\Resources\Action\Traits\RequestableAction;

class NetworkRequestAction extends Action
{
    use RequestableAction;

    public function getActionType(): string
    {
        return 'NetworkRequestAction';
    }
}
