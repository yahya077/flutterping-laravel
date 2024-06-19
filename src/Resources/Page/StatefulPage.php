<?php

namespace Flutterping\Resources\Page;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Element;
use Flutterping\Resources\Widgets\Widget;

class StatefulPage extends Page
{
    public function getType(): string
    {
        return ElementDefinitions::StatefulPage;
    }
}
