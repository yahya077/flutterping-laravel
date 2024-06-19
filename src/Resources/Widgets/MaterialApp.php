<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Definitions\ElementDefinitions;

class MaterialApp extends Widget
{
    protected Widget $home;

    protected bool $debugShowCheckedModeBanner = true;

    public function __construct(Widget $home)
    {
        $this->home = $home;
    }

    public function setDebugShowCheckedModeBanner(bool $debugShowCheckedModeBanner): self
    {
        $this->debugShowCheckedModeBanner = $debugShowCheckedModeBanner;

        return $this;
    }

    public function getType(): string
    {
        return ElementDefinitions::MaterialApp;
    }
}
