<?php

namespace Flutterping\Resources\Page;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Element;
use Flutterping\Resources\Widgets\Widget;

class MaterialPage extends Element implements PageInterface
{
    public function getType(): string
    {
        return ElementDefinitions::MaterialPage;
    }

    protected Widget $child;
    protected bool $fullscreenDialog = false;

    public function setChild(Widget $child): self
    {
        $this->child = $child;

        return $this;
    }

    public function setFullscreenDialog(bool $fullscreenDialog): self
    {
        $this->fullscreenDialog = $fullscreenDialog;

        return $this;
    }
}
