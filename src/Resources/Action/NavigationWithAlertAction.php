<?php

namespace Flutterping\Resources\Action;

use Flutterping\Resources\Action\Traits\AlertableAction;
use Flutterping\Resources\Action\Traits\NavigatableAction;

class NavigationWithAlertAction extends Action implements NavigationActionInterface, AlertActionInterface
{
    use NavigatableAction, AlertableAction;
    public function getActionType(): string
    {
        return 'navigate_with_alert';
    }
}
