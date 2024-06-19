<?php

namespace Flutterping\Resources\Action;

use Flutterping\Resources\Action\Traits\AlertableAction;

class AlertAction extends Action implements AlertActionInterface
{
    use AlertableAction;

    public function getActionType(): string
    {
        return 'AlertAction';
    }
}
