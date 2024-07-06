<?php

namespace Flutterping\Resources\Action\Traits;

use Flutterping\Resources\Action\NavigationAction;
use Flutterping\Resources\Action\NavigationWithAlertAction;
use Flutterping\Resources\Navigation\NavigationPath;

trait NavigatableAction
{
    protected NavigationPath $path;

    /**
     * @return NavigationAction|NavigationWithAlertAction|NavigatableAction
     */
    public function setPath(NavigationPath $path): self
    {
        $this->path = $path;

        return $this;
    }
}
