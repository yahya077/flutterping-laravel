<?php

namespace Flutterping\Resources\Navigation;

use Flutterping\Resources\Json;
use Flutterping\Resources\Value\StateValue;

class Path extends Json
{
    public function __construct(protected string $path = '') {}

    public function setPath(StateValue $path)
    {
        $this->path = $path;

        return $this;
    }

    public function getType(): string
    {
        return 'path';
    }
}
