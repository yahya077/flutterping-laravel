<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Paintings\TextStyle;

class Text extends Widget
{
    public function getType(): string
    {
        return ElementDefinitions::Text;
    }

    protected string $text;
    protected TextStyle $style;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function setStyle(TextStyle $style): self
    {
        $this->style = $style;

        return $this;
    }
}
