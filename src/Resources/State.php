<?php

namespace Flutterping\Resources;

use Flutterping\Resources\Action\Action;

class State extends Renderable
{
    protected string $name;

    protected array|Action $actions;

    public function getType(): string
    {
        return 'State';
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function setActions(array|Action $actions): self
    {
        $this->actions = $actions;

        return $this;
    }
}
