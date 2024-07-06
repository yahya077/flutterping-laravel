<?php

namespace Flutterping\Resources\Action;

use Flutterping\Resources\Json;

abstract class Action extends Json implements ActionInterface
{
    protected string $type;

    public function __construct()
    {
        $this->type = $this->getType();
    }

    public function getType(): string
    {
        return $this->getActionType();
    }

    abstract public function getActionType(): string;
}
