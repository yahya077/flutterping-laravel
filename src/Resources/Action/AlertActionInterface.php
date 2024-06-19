<?php

namespace Flutterping\Resources\Action;

use Flutterping\Resources\UI\Color;
use Flutterping\Resources\Widgets\Widget;

interface AlertActionInterface
{
    public function setContent(Widget $content): self;

    public function setColor(Color $color): self;
}
