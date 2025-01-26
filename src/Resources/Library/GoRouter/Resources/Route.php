<?php

namespace Flutterping\Resources\Library\GoRouter\Resources;

use Flutterping\Resources\Json;
use Flutterping\Resources\Navigation\Route as BaseRoute;
use Flutterping\Resources\Page\PageInterface;

abstract class Route extends BaseRoute implements RouteBaseInterface
{
    protected ?string $name;

    protected ?string $path;

    protected PageInterface|Json $page;

    protected ?string $parentNavigatorKey;

    protected ?string $redirect;

    protected array|Route $routes;

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function setPath(string $path): self
    {
        $this->path = $path;

        return $this;
    }

    public function setPage(PageInterface|Json $page): self
    {
        $this->page = $page;

        return $this;
    }

    public function setParentNavigatorKey(string $parentNavigatorKey): self
    {
        $this->parentNavigatorKey = $parentNavigatorKey;

        return $this;
    }

    public function setRedirect(string $redirect): self
    {
        $this->redirect = $redirect;

        return $this;
    }

    public function setRoutes(array|Route $routes): self
    {
        $this->routes = $routes;

        return $this;
    }
}
