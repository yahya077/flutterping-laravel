<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\AbstractBottomNavigationBar;
use Flutterping\Resources\Definitions\ElementDefinitions;

class Scaffold extends StatefulWidget
{
    public function getType(): string
    {
        return ElementDefinitions::Scaffold;
    }

    protected ?AppBar $appBar;

    protected ?Widget $body;

    protected ?AbstractBottomNavigationBar $bottomNavigationBar;

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

    public function setBottomNavigationBar(AbstractBottomNavigationBar $bottomNavigationBar): self
    {
        $this->bottomNavigationBar = $bottomNavigationBar;

        return $this;
    }
}