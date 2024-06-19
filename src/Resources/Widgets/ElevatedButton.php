<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Definitions\ElementDefinitions;

class ElevatedButton extends ButtonStyleButton
{
    public function getType(): string
    {
        return ElementDefinitions::ElevatedButton;
    }
}
