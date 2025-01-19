<?php

namespace Flutterping\Resources\Validator;

use Flutterping\Resources\Definitions\ValidatorDefinitions;

class EmailValidator extends PredefinedValidator
{
    public function getType(): string
    {
        return ValidatorDefinitions::EmailValidator;
    }
}
