<?php

namespace Flutterping\Resources\Action;

use Flutterping\Resources\Json;

abstract class Action extends Json implements ActionInterface
{
    protected string $type;

    protected Action $thenAction;
    protected Action $onFailAction;

    public function __construct()
    {
        $this->type = $this->getType();
    }

    public function getType(): string
    {
        return $this->getActionType();
    }

    public function then(Action $thenAction): self
    {
        $this->thenAction = $thenAction;

        return $this;
    }

    public function onFail(Action $onFailAction): self
    {
        $this->onFailAction = $onFailAction;

        return $this;
    }

    abstract public function getActionType(): string;
}
