<?php

namespace Flutterping\Resources\Library\GoRouter\Resources;

use Flutterping\Concept\Page;
use Flutterping\Resources\Library\GoRouter\Definitions\TypeDefinitions;

class GoRoute extends Route
{
    public function getType(): string
    {
        return TypeDefinitions::GoRoute;
    }

    public static function fromPage(Page $page): self
    {
        return (new self)
            ->setRedirect($page::getRedirect())
            ->setPage($page)
            ->setName($page::getRouteName())
            ->setPath($page::getRoutePath())
            ->setStateId($page::getRouteStateId());
    }
}
