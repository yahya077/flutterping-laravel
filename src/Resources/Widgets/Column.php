<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Definitions\ElementDefinitions;

class Column extends Flex
{
    public function getType(): string
    {
        return ElementDefinitions::Column;
    }
}
