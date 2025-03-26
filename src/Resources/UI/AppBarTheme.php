<?php

namespace Flutterping\Resources\UI;

use Flutterping\Resources\Contracts\ColorInterface;
use Flutterping\Resources\Core\CoreDouble;
use Flutterping\Resources\Renderable;

class AppBarTheme extends Renderable
{
    protected ColorInterface $backgroundColor;
    protected ColorInterface $foregroundColor;
    protected bool $centerTitle;
    protected CoreDouble $elevation;
    protected ColorInterface $shadowColor;

}
