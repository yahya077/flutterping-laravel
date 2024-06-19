<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\UI\Color;

class AppBar extends PreferredSizeWidget
{
    public function getType(): string
    {
        return ElementDefinitions::AppBar;
    }

    protected ?Widget $title;

    protected ?Widget $leading;

    protected array|Widget|null $actions;

    protected ?float $elevation;

    protected ?Color $backgroundColor;

    protected ?bool $centerTitle = false;

    public function setTitle(Widget $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function setLeading(Widget $leading): self
    {
        $this->leading = $leading;

        return $this;
    }

    public function setActions(array|Widget $actions): self
    {
        $this->actions = $actions;

        return $this;
    }

    public function setElevation(float $elevation): self
    {
        $this->elevation = $elevation;

        return $this;
    }

    public function setBackgroundColor(Color $backgroundColor): self
    {
        $this->backgroundColor = $backgroundColor;

        return $this;
    }

    public function setCenterTitle(bool $centerTitle): self
    {
        $this->centerTitle = $centerTitle;

        return $this;
    }
}
