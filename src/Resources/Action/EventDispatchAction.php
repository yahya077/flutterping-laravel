<?php

namespace Flutterping\Resources\Action;

use Flutterping\Resources\Scope;

class EventDispatchAction extends Action
{
    protected $stateId;

    protected $name;

    protected $payload;

    protected ?Scope $scope;

    public function __construct(string $stateId, string $name, $payload = '', ?Scope $scope = null)
    {
        parent::__construct();
        $this->stateId = $stateId;
        $this->name = $name;
        $this->payload = $payload;
        $this->scope = $scope;
    }

    public function setScope(Scope $scope): self
    {
        $this->scope = $scope;

        return $this;
    }

    public function getActionType(): string
    {
        return 'EventDispatchAction';
    }
}
