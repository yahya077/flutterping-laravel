<?php

namespace Flutterping\Resources\Action;

use Flutterping\Resources\Element;

abstract class Action extends Element implements ActionInterface
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
