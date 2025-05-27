<?php

namespace Flutterping\Resources\Library\Choice\Resources;

use Flutterping\Resources\Library\Choice\Resources\Contracts\ChoicePromptDelegateInterface;
use Flutterping\Resources\Contracts\ColorInterface;
use Flutterping\Resources\Json;

class ChoicePromptDelegateNewPage extends Json implements ChoicePromptDelegateInterface
{
    protected ColorInterface $backgroundColor;

    protected Json $header;

    public function setBackgroundColor(ColorInterface $backgroundColor): self
    {
        $this->backgroundColor = $backgroundColor;

        return $this;
    }

    public function setHeader(Json $header): self
    {
        $this->header = $header;

        return $this;
    }

    public function getType(): string
    {
        return 'ChoicePromptDelegateNewPage';
    }
}