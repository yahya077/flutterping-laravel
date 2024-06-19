<?php

namespace Flutterping\Resources\Event;

use Flutterping\Resources\Action\ActionInterface;

class StateEvent extends BaseEvent
{
    public function __construct()
    {
        $this->name = "StateEvent";
    }

    public function setActionStateId(string $stateId): BaseEvent
    {
        return parent::setPayload($stateId);
    }

    public function getType(): string
    {
        return $this->name;
    }
}
