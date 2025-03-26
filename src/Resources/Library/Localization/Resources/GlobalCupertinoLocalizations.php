<?php

namespace Flutterping\Resources\Library\Localization\Resources;

use Flutterping\Resources\Json;
use Flutterping\Resources\Library\Localization\Definitions\TypeDefinitions;

class GlobalCupertinoLocalizations extends Json
{
    public function getType(): string
    {
        return TypeDefinitions::GlobalCupertinoLocalizations;
    }
}
