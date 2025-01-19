<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\UI\AutovalidateMode;

class Form extends Widget
{
    protected string $key;

    protected Widget $child;

    protected AutovalidateMode $autovalidateMode;

    public function __construct(string $key)
    {
        $this->key = $key;
    }

    public function setKey(string $key): self
    {
        $this->key = $key;

        return $this;
    }

    public function setWidget(Widget $child): self
    {
        $this->child = $child;

        return $this;
    }

    public function setAutovalidateMode(AutovalidateMode $autovalidateMode): self
    {
        $this->autovalidateMode = $autovalidateMode;

        return $this;
    }

    public function getType(): string
    {
        return ElementDefinitions::Form;
    }
}
