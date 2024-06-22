<?php

namespace Flutterping\Resources\Library\CarouselSlider\Resources;

use Flutterping\Resources\Foundation\ChangeNotifier;
use Flutterping\Resources\Library\CarouselSlider\Definitions\TypeDefinitions;

class CarouselController extends ChangeNotifier
{
    public function getType(): string
    {
        return TypeDefinitions::CarouselController;
    }
}
