<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Contracts\ColorInterface;
use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Json;
use Flutterping\Resources\UI\FloatingActionButtonLocation;

class Scaffold extends StatefulWidget
{
    public function getType(): string
    {
        return ElementDefinitions::Scaffold;
    }

    protected AppBar|Json $appBar;

    protected Widget|Json $body;

    protected Widget|Json $floatingActionButton;

    protected Widget|Json $bottomNavigationBar;

    protected ColorInterface $backgroundColor;

    protected FloatingActionButtonLocation $floatingActionButtonLocation;

    public function setAppBar(AppBar|Json $appBar): self
    {
        $this->appBar = $appBar;

        return $this;
    }

    public function setBody(Widget|Json $body): self
    {
        $this->body = $body;

        return $this;
    }

    public function setBottomNavigationBar(Widget|Json $bottomNavigationBar): self
    {
        $this->bottomNavigationBar = $bottomNavigationBar;

        return $this;
    }

    public function setFloatingActionButton(Widget|Json $floatingActionButton): self
    {
        $this->floatingActionButton = $floatingActionButton;

        return $this;
    }

    public function setFloatingActionButtonLocation(FloatingActionButtonLocation $floatingActionButtonLocation): self
    {
        $this->floatingActionButtonLocation = $floatingActionButtonLocation;

        return $this;
    }

    public function setBackgroundColor(ColorInterface $backgroundColor): self
    {
        $this->backgroundColor = $backgroundColor;

        return $this;
    }
}
