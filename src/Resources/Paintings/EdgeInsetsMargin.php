<?php

namespace Flutterping\Resources\Paintings;

use Flutterping\Resources\Definitions\ElementDefinitions;

class EdgeInsetsMargin extends EdgeInsets
{
    public function getType(): string
    {
        return ElementDefinitions::EdgeInsetsMargin;
    }
}
