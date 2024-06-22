<?php

namespace Flutterping\Resources\Navigation;

use Flutterping\Resources\Definitions\ElementDefinitions;

class ApiPath extends Path
{
    public function getType(): string
    {
        return ElementDefinitions::ApiPath;
    }
}
