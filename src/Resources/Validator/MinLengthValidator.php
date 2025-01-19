<?php

namespace Flutterping\Resources\Validator;

use Flutterping\Resources\Definitions\ValidatorDefinitions;

class MinLengthValidator extends PredefinedValidator
{
    protected int $min;

    public function __construct(int $min)
    {
        $this->min = $min;
    }

    public function getType(): string
    {
        return ValidatorDefinitions::MinLengthValidator;
    }
}
