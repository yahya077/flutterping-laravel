<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Json;

class BottomNavigationBarItem extends Widget
{
    protected string $label;

    protected Widget|Json $icon;

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
