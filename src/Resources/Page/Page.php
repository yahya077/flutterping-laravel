<?php

namespace Flutterping\Resources\Page;

use Flutterping\Resources\Json;
use Flutterping\Resources\Page\Loader\PageLoader;
use Flutterping\Resources\Widgets\Widget;

abstract class Page extends Widget implements PageInterface
{
    protected Widget|Json $child;

    protected string $stateId;

    protected ?PageLoader $pageLoader;

    public function setChild(Widget|Json $child): self
    {
        $this->child = $child;

        return $this;
    }

    public function setPageLoader(PageLoader $pageLoader): self
    {
        $this->pageLoader = $pageLoader;

        return $this;
    }

    public function setStateId(string $stateId): self
    {
        $this->stateId = $stateId;

        return $this;
    }
}
