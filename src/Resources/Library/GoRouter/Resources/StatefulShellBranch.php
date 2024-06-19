<?php

namespace Flutterping\Resources\Library\GoRouter\Resources;

use Flutterping\Resources\Library\GoRouter\Definitions\TypeDefinitions;
use Flutterping\Resources\Navigation\StackedRoute;

class StatefulShellBranch extends StackedRoute implements StatefulShellBranchInterface
{
    public function getType(): string
    {
        return TypeDefinitions::StatefulShellBranch;
    }

    protected ?string $navigatorKey;
    protected array|Route $routes;

    public function setNavigatorKey(string $navigatorKey): self
    {
        $this->navigatorKey = $navigatorKey;

        return $this;
    }

    public function setRoutes(array|Route $routes): self
    {
        $this->routes = $routes;

        return $this;
    }
}
