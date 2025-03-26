<?php

namespace Flutterping\Resources\Library\Localization\Resources;

use Flutterping\Resources\Json;
use Flutterping\Resources\Library\Localization\Definitions\TypeDefinitions;

class l10nDelegate extends Json
{
    public function getType(): string
    {
        return TypeDefinitions::l10nDelegate;
    }
}
