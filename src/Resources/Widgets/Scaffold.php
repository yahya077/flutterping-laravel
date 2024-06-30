<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Definitions\ElementDefinitions;

class Scaffold extends StatefulWidget
{
    public function getType(): string
    {
        return ElementDefinitions::Scaffold;
    }

    protected ?AppBar $appBar;

    protected ?Widget $body;

    protected ?Widget $bottomNavigationBar;

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
}
