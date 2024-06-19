<?php

namespace Flutterping\Resources\Navigation;

use Flutterping\Resources\Element;

class Path extends Element
{
    public function __construct(protected string $path) {}

    public function setPath(string $path)
    {
        $this->path = $path;

        return $this;
    }

    public function getType(): string
    {
        return 'path';
    }
}
