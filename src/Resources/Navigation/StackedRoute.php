<?php

namespace Flutterping\Resources\Navigation;

use Flutterping\Resources\Element;

abstract class StackedRoute extends Element implements RouteInterface
{
    protected int $stackIndex = 0;

    public function setStackIndex(int $stackIndex): self
    {
        $this->stackIndex = $stackIndex;
        return $this;
    }
}
