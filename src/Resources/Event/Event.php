<?php

namespace Flutterping\Resources\Event;

use Flutterping\Resources\Action\ActionInterface;
use Flutterping\Resources\Element;
use Flutterping\Resources\Renderable;

class Event extends BaseEvent
{
    public function setPayload(mixed $payload): self
    {
        return parent::setPayload($payload);
    }
}
