<?php

namespace Flutterping\Resources\Library\GoRouter\Resources;

use Flutterping\Resources\Library\GoRouter\Definitions\TypeDefinitions;
use Flutterping\Resources\Page\PageInterface;

class GoRoute extends Route
{
    public function getType(): string
    {
        return TypeDefinitions::GoRoute;
    }

    protected ?string $name;
    protected ?string $path;
    protected PageInterface $page;
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

    public function setPage(PageInterface $page): self
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
