<?php

namespace Flutterping\Resources\Library\Localization\Resources;

use Flutterping\Resources\Library\Localization\Definitions\TypeDefinitions;
use Flutterping\Resources\Json;

class GlobalWidgetsLocalizations extends Json
{
    public function getType(): string
    {
        return TypeDefinitions::GlobalWidgetsLocalizations;
    }
}
