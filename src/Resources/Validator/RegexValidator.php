<?php

namespace Flutterping\Resources\Validator;

use Flutterping\Resources\Definitions\ValidatorDefinitions;

class RegexValidator extends PredefinedValidator
{
    protected string $pattern;

    protected bool $caseSensitive = false;

    public function __construct(string $pattern)
    {
        $this->pattern = $pattern;
    }

    public function setCaseSensitive(bool $caseSensitive): self
    {
        $this->caseSensitive = $caseSensitive;

        return $this;
    }

    public function getType(): string
    {
        return ValidatorDefinitions::RegexValidator;
    }
}
