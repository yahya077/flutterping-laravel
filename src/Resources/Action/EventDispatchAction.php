<?php

namespace Flutterping\Resources\Action;

class EventDispatchAction extends Action
{
    protected $stateId;

    protected $name;

    protected $payload;

    public function __construct(string $stateId, string $name, $payload = '')
    {
        parent::__construct();
        $this->stateId = $stateId;
        $this->name = $name;
        $this->payload = $payload;
    }

    public function getActionType(): string
    {
        return 'EventDispatchAction';
    }
}
