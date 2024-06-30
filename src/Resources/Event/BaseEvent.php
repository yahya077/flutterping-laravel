<?php

namespace Flutterping\Resources\Event;

use Flutterping\Resources\Element;
use Flutterping\Resources\Scope;

abstract class BaseEvent extends Element implements EventInterface
{
    protected string $name;

    protected string $stateId;

    protected string $reactiveWidgetStateId;

    protected mixed $payload;
    protected Scope $scope;

    protected function setPayload(mixed $payload): self
    {
        $this->payload = $payload;

        return $this;
    }

    public function setStateId(string $stateId): self
    {
        $this->stateId = $stateId;

        return $this;
    }

    public function setReactiveWidgetStateId(string $reactiveWidgetStateId): self
    {
        $this->reactiveWidgetStateId = $reactiveWidgetStateId;

        return $this;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function setScope(Scope $scope): self
    {
        $this->scope = $scope;

        return $this;
    }
}
