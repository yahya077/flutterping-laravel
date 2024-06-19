<?php

namespace Flutterping\Resources\Navigation;

use Flutterping\Resources\Element;

abstract class NestedRouteBase extends Route
{
    protected string $stackKey;

    public function setStackKey(string $stackKey): self
    {
        $this->stackKey = $stackKey;
        return $this;
    }

}
