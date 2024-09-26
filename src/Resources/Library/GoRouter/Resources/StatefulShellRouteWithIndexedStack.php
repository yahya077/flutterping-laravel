<?php

namespace Flutterping\Resources\Library\GoRouter\Resources;

use Flutterping\Resources\Json;
use Flutterping\Resources\Library\GoRouter\Definitions\TypeDefinitions;
use Flutterping\Resources\Navigation\NestedRouteBase;
use Flutterping\Resources\Page\PageInterface;

class StatefulShellRouteWithIndexedStack extends NestedRouteBase
{
    public function getType(): string
    {
        return TypeDefinitions::StatefulShellRouteWithIndexedStack;
    }

    protected string $parentNavigatorKey;

    protected array|StatefulShellBranchInterface $branches;

    protected PageInterface|Json $wrapperPage;

    public function setParentNavigatorKey(string $parentNavigatorKey): self
    {
        $this->parentNavigatorKey = $parentNavigatorKey;

        return $this;
    }

    public function setBranches(array|StatefulShellBranchInterface $branches): self
    {
        $this->branches = $branches;

        return $this;
    }

    public function setWrapperPage(PageInterface|Json $wrapperPage): self
    {
        $this->wrapperPage = $wrapperPage;

        return $this;
    }
}
