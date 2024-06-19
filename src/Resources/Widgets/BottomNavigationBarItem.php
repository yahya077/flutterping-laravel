<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Definitions\ElementDefinitions;

class BottomNavigationBarItem extends Widget
{
    protected string $label;
    protected Widget $icon;

    public function __construct(string $label, Widget $icon)
    {
        $this->label = $label;
        $this->icon = $icon;
    }

    public function getType(): string
    {
        return ElementDefinitions::BottomNavigationBarItem;
    }
}
