<?php

namespace Flutterping\Resources\Action;

use Flutterping\Resources\Value\AbstractValue;

class UpdateStateAction extends Action
{
    protected string $key;

    protected AbstractValue $value;

    public function getActionType(): string
    {
        return 'UpdateStateAction';
    }

    public function setKey(string $key): self
    {
        $this->key = $key;

        return $this;
    }

    public function setValue(AbstractValue $value): self
    {
        $this->value = $value;

        return $this;
    }
}
