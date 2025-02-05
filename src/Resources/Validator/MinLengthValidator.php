<?php

namespace Flutterping\Resources\Validator;

use Flutterping\Resources\Definitions\ValidatorDefinitions;

class MinLengthValidator extends PredefinedValidator
{
    protected int $min;

    protected bool $withoutSpaces = false;

    public function __construct(int $min)
    {
        $this->min = $min;
    }

    public function withoutSpaces(): self
    {
        $this->withoutSpaces = true;

        return $this;
    }

    public function getType(): string
    {
        return ValidatorDefinitions::MinLengthValidator;
    }
}
