<?php

namespace Flutterping\Resources\Foundation;

use Flutterping\Resources\Definitions\ElementDefinitions;

class ScrollController extends ChangeNotifier
{
    public function getType(): string
    {
        return ElementDefinitions::ScrollController;
    }
}
