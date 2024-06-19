<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\RouterConfig;

class MaterialAppRouter extends Widget
{
    protected RouterConfig $routerConfig;
    protected bool $debugShowCheckedModeBanner = false;

    public function setRouterConfig(RouterConfig $routerConfig): self
    {
        $this->routerConfig = $routerConfig;
        return $this;
    }

    public function setDebugShowCheckedModeBanner(bool $debugShowCheckedModeBanner): self
    {
        $this->debugShowCheckedModeBanner = $debugShowCheckedModeBanner;
        return $this;
    }
    public function getType(): string
    {
        return ElementDefinitions::MaterialAppRouter;
    }
}
