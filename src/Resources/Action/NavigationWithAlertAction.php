<?php

namespace Flutterping\Resources\Action;

use Flutterping\Resources\Action\Traits\AlertableAction;
use Flutterping\Resources\Action\Traits\NavigatableAction;

class NavigationWithAlertAction extends Action implements AlertActionInterface, NavigationActionInterface
{
    use AlertableAction, NavigatableAction;

    public function getActionType(): string
    {
        return 'navigate_with_alert';
    }
}
