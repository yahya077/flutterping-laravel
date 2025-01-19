<?php

namespace Flutterping\Resources\Validator;

use Flutterping\Resources\Json;

abstract class Validator extends Json
{
    protected string $errorMessage = 'Not valid!';

    public function setErrorMessage(string $errorMessage): self
    {
        $this->errorMessage = $errorMessage;

        return $this;
    }
}
