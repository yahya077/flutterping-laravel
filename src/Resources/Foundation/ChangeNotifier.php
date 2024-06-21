<?php

namespace Flutterping\Resources\Foundation;

use Flutterping\Resources\Element;

abstract class ChangeNotifier extends Element
{
    protected string $id;

    public function __construct($id = null)
    {
        $this->id = $id ?? uniqid();
    }

    public function getId(): string
    {
        return $this->id;
    }
}
