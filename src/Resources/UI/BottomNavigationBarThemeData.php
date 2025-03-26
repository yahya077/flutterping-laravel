<?php

namespace Flutterping\Resources\UI;

use Flutterping\Resources\Contracts\ColorInterface;
use Flutterping\Resources\Core\CoreDouble;
use Flutterping\Resources\Renderable;

class BottomNavigationBarThemeData extends Renderable
{
    protected ColorInterface $backgroundColor;
    protected ColorInterface $selectedItemColor;
    protected ColorInterface $unselectedItemColor;
    protected CoreDouble $elevation;
}
