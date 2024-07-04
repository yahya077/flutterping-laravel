<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\UI\FloatingActionButtonLocation;

class Scaffold extends StatefulWidget
{
    public function getType(): string
    {
        return ElementDefinitions::Scaffold;
    }

    protected ?AppBar $appBar;

    protected ?Widget $body;

    protected ?Widget $floatingActionButton;

    protected ?Widget $bottomNavigationBar;

    protected FloatingActionButtonLocation $floatingActionButtonLocation;

    public function setAppBar(AppBar $appBar): self
    {
        $this->appBar = $appBar;

        return $this;
    }

    public function setBody(Widget $body): self
    {
        $this->body = $body;

        return $this;
    }

    public function setBottomNavigationBar(Widget $bottomNavigationBar): self
    {
        $this->bottomNavigationBar = $bottomNavigationBar;

        return $this;
    }

    public function setFloatingActionButton(Widget $floatingActionButton): self
    {
        $this->floatingActionButton = $floatingActionButton;

        return $this;
    }

    public function setFloatingActionButtonLocation(FloatingActionButtonLocation $floatingActionButtonLocation): self
    {
        $this->floatingActionButtonLocation = $floatingActionButtonLocation;

        return $this;
    }
}
