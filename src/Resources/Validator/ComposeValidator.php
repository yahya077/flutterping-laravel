<?php

namespace Flutterping\Resources\Validator;

use Flutterping\Resources\Definitions\ValidatorDefinitions;

class ComposeValidator extends Validator
{
    protected $validators = [];

    public function __construct(array $validators)
    {
        $this->validators = $validators;
    }

    public function addValidator(Validator $validator)
    {
        $this->validators[] = $validator;
    }
    public function getType(): string
    {
        return ValidatorDefinitions::ComposeValidator;
    }
}
