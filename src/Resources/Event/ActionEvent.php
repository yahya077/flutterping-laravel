<?php

namespace Flutterping\Resources\Event;

use Flutterping\Resources\Action\ActionInterface;

class ActionEvent extends BaseEvent
{
    public function __construct()
    {
        $this->name = 'ActionEvent';
    }

    public function setAction(ActionInterface $action): self
    {
        return self::setPayload($action);
    }

    public function getType(): string
    {
        return $this->name;
    }
}
