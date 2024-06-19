<?php

namespace Flutterping\Resources\Event;

class Event extends BaseEvent
{
    public function setPayload(mixed $payload): self
    {
        return parent::setPayload($payload);
    }
}
