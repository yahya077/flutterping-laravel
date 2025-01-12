<?php

namespace Flutterping\Resources\Library\FlutterCreditCard\Resources;

use Flutterping\Resources\Library\FlutterCreditCard\Definitions\TypeDefinitions;
use Flutterping\Resources\Widgets\Widget;

class FlutterCreditCard extends Widget
{
    protected string $cardNumber = ''; // 0000 0000 0000 0000

    protected string $expiryDate = '';

    protected string $cardHolderName = '';

    protected string $cvvCode = '';

    public function setCardNumber(string $cardNumber): self
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    public function setExpiryDate(string $expiryDate): self
    {
        $this->expiryDate = $expiryDate;

        return $this;
    }

    public function setCardHolderName(string $cardHolderName): self
    {
        $this->cardHolderName = $cardHolderName;

        return $this;
    }

    public function setCvvCode(string $cvvCode): self
    {
        $this->cvvCode = $cvvCode;

        return $this;
    }

    public function getType(): string
    {
        return TypeDefinitions::FlutterCreditCard;
    }
}
