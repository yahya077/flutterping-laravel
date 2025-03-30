<?php

namespace Flutterping\Resources\Action;

use Flutterping\Resources\Json;
use Flutterping\Resources\Widgets\Widget;

class DialogAction extends Action
{
    protected string $message;
    protected string $title;

    protected string $defaultActionText;

    protected Json|Widget $content;

    protected bool $isDismissable;

    protected array|Widget|null $actions;

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function setDefaultActionText(string $defaultActionText): self
    {
        $this->defaultActionText = $defaultActionText;

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

    public function setActions(array|Widget $actions): self
    {
        $this->actions = $actions;

        return $this;
    }

    public function getActionType(): string
    {
        return 'DialogAction';
    }
}
