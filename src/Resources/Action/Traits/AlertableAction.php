<?php

namespace Flutterping\Resources\Action\Traits;

use Flutterping\Resources\UI\Color;
use Flutterping\Resources\Widgets\Widget;

trait AlertableAction
{
    protected Widget $content;

    protected ?Color $color;

    public function setContent(Widget $content): self
    {
        $this->content = $content;
        return $this;
    }

    public function setColor(Color $color): self
    {
        $this->color = $color;
        return $this;
    }
}