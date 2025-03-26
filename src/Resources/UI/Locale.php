<?php

namespace Flutterping\Resources\UI;

use Flutterping\Resources\Renderable;

class Locale extends Renderable
{
    protected string $languageCode;

    protected string $countryCode;

    public function __construct($languageCode, $countryCode = null)
    {
        $this->languageCode = $languageCode;
        $this->countryCode = $countryCode;
    }

    public static function fromLanguageCode($languageCode): self
    {
        return new self($languageCode);
    }

    public static function TR(): self
    {
        return new self('tr', 'tr_TR');
    }

    public static function US(): self
    {
        return new self('en', 'en_US');
    }
}
