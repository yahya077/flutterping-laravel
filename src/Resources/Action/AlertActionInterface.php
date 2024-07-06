<?php

namespace Flutterping\Resources\Action;

use Flutterping\Resources\Json;
use Flutterping\Resources\UI\Color;
use Flutterping\Resources\Widgets\Widget;

interface AlertActionInterface
{
    public function setContent(Widget|Json $content): self;

    public function setColor(Color $color): self;
}
