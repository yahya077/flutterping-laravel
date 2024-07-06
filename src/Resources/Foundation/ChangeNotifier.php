<?php

namespace Flutterping\Resources\Foundation;

use Flutterping\Resources\Json;

abstract class ChangeNotifier extends Json
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
