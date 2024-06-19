<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Definitions\ElementDefinitions;

class CircularProgressIndicator extends Widget
{
    protected int $value = 0;

    public function getType(): string
    {
        return ElementDefinitions::CircularProgressIndicator;
    }
}
