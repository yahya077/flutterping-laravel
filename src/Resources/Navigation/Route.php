<?php

namespace Flutterping\Resources\Navigation;

use Flutterping\Resources\Element;

abstract class Route extends Element implements RouteInterface
{
    protected string $stateId;

    public function setStateId(string $stateId): self
    {
        $this->stateId = $stateId;
        return $this;
    }
}
