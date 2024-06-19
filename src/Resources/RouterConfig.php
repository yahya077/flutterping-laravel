<?php

namespace Flutterping\Resources;

abstract class RouterConfig extends Element
{
    protected string $initialRoutePath;
    protected array $routes;

    public function setInitialRoutePath(string $initialRoutePath): self
    {
        $this->initialRoutePath = $initialRoutePath;

        return $this;
    }

    public function setRoutes(array $routes): self
    {
        $this->routes = $routes;

        return $this;
    }
}
