<?php

namespace Flutterping\Resources\Validator;

use Flutterping\Resources\Definitions\ValidatorDefinitions;

class MaxLengthValidator extends PredefinedValidator
{
    protected int $max;

    public function __construct(int $max)
    {
        $this->max = $max;
    }

    public function getType(): string
    {
        return ValidatorDefinitions::MaxLengthValidator;
    }
}
