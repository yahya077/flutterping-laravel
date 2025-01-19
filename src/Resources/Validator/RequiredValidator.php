<?php

namespace Flutterping\Resources\Validator;

use Flutterping\Resources\Definitions\ValidatorDefinitions;

class RequiredValidator extends PredefinedValidator
{
    public function getType(): string
    {
        return ValidatorDefinitions::RequiredValidator;
    }
}
