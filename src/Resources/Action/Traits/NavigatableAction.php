<?php

namespace Flutterping\Resources\Action\Traits;

use Flutterping\Resources\Action\NavigationAction;
use Flutterping\Resources\Action\NavigationWithAlertAction;
use Flutterping\Resources\Navigation\NavigationPath;
use Flutterping\Resources\Navigation\Path;

trait NavigatableAction
{
    protected NavigationPath $path;

    /**
     * @param NavigationPath $path
     * @return NavigationAction|NavigationWithAlertAction|NavigatableAction
     */
    public function setPath(NavigationPath $path): self
    {
        $this->path = $path;

        return $this;
    }
}
