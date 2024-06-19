<?php

namespace Flutterping\Resources\Paintings;

use Flutterping\Resources\Definitions\ElementDefinitions;

class EdgeInsetsPadding extends EdgeInsets
{
    public function getType(): string
    {
        return ElementDefinitions::EdgeInsetsPadding;
    }
}
