<?php

namespace Flutterping\Resources\Validator;

use Flutterping\Resources\Definitions\ValidatorDefinitions;

class MaxLengthValidator extends PredefinedValidator
{
    protected int $max;

    protected bool $withoutSpaces = false;

    public function __construct(int $max)
    {
        $this->max = $max;
    }

    public function withoutSpaces(): self
    {
        $this->withoutSpaces = true;

        return $this;
    }

    public function getType(): string
    {
        return ValidatorDefinitions::MaxLengthValidator;
    }
}
