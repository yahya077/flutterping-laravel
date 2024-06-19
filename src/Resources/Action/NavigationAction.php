<?php

namespace Flutterping\Resources\Action;

use Flutterping\Resources\Action\Traits\NavigatableAction;

class NavigationAction extends Action
{
    use NavigatableAction;

    public function getActionType(): string
    {
        return 'NavigationAction';
    }
}
