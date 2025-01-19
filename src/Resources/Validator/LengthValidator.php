<?php

namespace Flutterping\Resources\Validator;

use Flutterping\Resources\Definitions\ValidatorDefinitions;

class LengthValidator extends PredefinedValidator
{
    protected int $min;
    protected int $max;

    public function __construct(int $min, int $max)
    {
        $this->min = $min;
        $this->max = $max;
    }

    public function getType(): string
    {
        return ValidatorDefinitions::LengthValidator;
    }
}
