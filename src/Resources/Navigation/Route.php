<?php

namespace Flutterping\Resources\Navigation;

use Flutterping\Resources\Json;

abstract class Route extends Json implements RouteInterface
{
    protected string $stateId;

    public function setStateId(string $stateId): self
    {
        $this->stateId = $stateId;

        return $this;
    }
}
