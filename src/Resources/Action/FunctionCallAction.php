<?php

namespace Flutterping\Resources\Action;

use Flutterping\Resources\Value;

class FunctionCallAction extends Action
{
    protected string $notifierId;
    protected string $method;
    protected string $scopeId;
    /**
     * @var array<string, Value>
     */
    protected array $arguments;

    public function setNotifierId(string $notifierId): self
    {
        $this->notifierId = $notifierId;
        return $this;
    }

    public function setMethod(string $method): self
    {
        $this->method = $method;
        return $this;
    }

    /**
     * @param array<string, Value> $arguments
     */
    public function setArguments(array $arguments): self
    {
        $this->arguments = $arguments;
        return $this;
    }

    public function setScopeId(string $scopeId): self
    {
        $this->scopeId = $scopeId;
        return $this;
    }

    public function getActionType(): string
    {
        return 'FunctionCallAction';
    }
}