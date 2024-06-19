<?php

namespace Flutterping\Resources\Page;

use Flutterping\Resources\Definitions\ElementDefinitions;

class StatefulPage extends Page
{
    public function getType(): string
    {
        return ElementDefinitions::StatefulPage;
    }
}
