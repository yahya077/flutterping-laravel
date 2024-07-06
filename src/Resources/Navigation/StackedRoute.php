<?php

namespace Flutterping\Resources\Navigation;

use Flutterping\Resources\Json;

abstract class StackedRoute extends Json implements RouteInterface
{
    protected int $stackIndex = 0;

    public function setStackIndex(int $stackIndex): self
    {
        $this->stackIndex = $stackIndex;

        return $this;
    }
}
