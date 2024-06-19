<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Definitions\ElementDefinitions;

class Row extends Flex
{
    public function getType(): string
    {
        return ElementDefinitions::Row;
    }
}
