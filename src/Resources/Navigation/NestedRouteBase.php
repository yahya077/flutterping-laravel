<?php

namespace Flutterping\Resources\Navigation;

abstract class NestedRouteBase extends Route
{
    protected string $stackKey;

    public function setStackKey(string $stackKey): self
    {
        $this->stackKey = $stackKey;

        return $this;
    }
}
