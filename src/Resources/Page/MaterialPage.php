<?php

namespace Flutterping\Resources\Page;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Json;
use Flutterping\Resources\Widgets\Widget;

class MaterialPage extends Json implements PageInterface
{
    public function getType(): string
    {
        return ElementDefinitions::MaterialPage;
    }

    protected Widget|Json $child;

    protected bool $fullscreenDialog = false;

    public function setChild(Widget|Json $child): self
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
