<?php

namespace Flutterping\Resources\Action;

use Flutterping\Resources\Json;
use Flutterping\Resources\Widgets\Widget;

class UpdateNotifierAction extends Action
{
    protected Json $value;

    protected string $notifierId;

    public function setValue(Json $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function setNotifierId(string $notifierId): self
    {
        $this->notifierId = $notifierId;

        return $this;
    }

    public function getActionType(): string
    {
        return 'UpdateNotifierAction';
    }
}
