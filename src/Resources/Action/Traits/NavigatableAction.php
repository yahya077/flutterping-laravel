<?php

namespace Flutterping\Resources\Action\Traits;

use Flutterping\Resources\Navigation\NavigationPath;
use Flutterping\Resources\Navigation\Path;

trait NavigatableAction
{
    protected NavigationPath $path;

    /**
     * @param Path $path
     */
    public function setPath(NavigationPath $path): self
    {
        $this->path = $path;

        return $this;
    }
}
