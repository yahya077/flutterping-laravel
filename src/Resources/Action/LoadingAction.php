<?php

namespace Flutterping\Resources\Action;

use Flutterping\Resources\Json;
use Flutterping\Resources\Widgets\Widget;

class LoadingAction extends Action
{
    protected string $message;

    protected Json|Widget $content;

    protected bool $isDismissable;

    protected bool $isLoading;

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function setContent(Json|Widget $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function setIsDismissable(bool $isDismissable): self
    {
        $this->isDismissable = $isDismissable;

        return $this;
    }

    public function setIsLoading(bool $isLoading): self
    {
        $this->isLoading = $isLoading;

        return $this;
    }

    public function getActionType(): string
    {
        return 'LoadingAction';
    }
}
