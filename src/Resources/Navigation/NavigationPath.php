<?php

namespace Flutterping\Resources\Navigation;

use Flutterping\Resources\Definitions\ElementDefinitions;

class NavigationPath extends Path
{
    public function __construct(protected string $path, protected $stackKey = null, protected $index = null)
    {
        parent::__construct($path);
    }

    public function setStackKey($stackKey)
    {
        $this->stackKey = $stackKey;

        return $this;
    }

    public function setIndex($index)
    {
        $this->index = $index;

        return $this;
    }

    public function getType(): string
    {
        return ElementDefinitions::NavigationPath;
    }
}
