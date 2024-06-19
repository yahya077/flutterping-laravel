<?php

namespace Flutterping\Resources\Navigation;

class RouteModel implements \JsonSerializable
{
    protected string $initialRoutePath = '/';

    protected array|Route $routes;

    public function setInitialRoutePath(string $initialRoutePath): self
    {
        $this->initialRoutePath = $initialRoutePath;

        return $this;
    }

    public function setRoutes(array|Route $routes): self
    {
        $this->routes = $routes;

        return $this;
    }

    public function jsonSerialize(): mixed
    {
        return [
            'initialRoutePath' => $this->initialRoutePath,
            'routes' => collect($this->routes)->map(fn ($route) => $route->jsonSerialize())->toArray(),
        ];
    }
}
