<?php

namespace Flutterping\Resources\Library\FlutterCreditCard\Resources;

use Flutterping\Resources\Library\FlutterCreditCard\Definitions\TypeDefinitions;
use Flutterping\Resources\Widgets\Widget;

class FlutterCreditCard extends Widget
{
    protected string $cardNumber = '0000 0000 0000 0000';

    public function setCardNumber(string $cardNumber): self
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    public function getType(): string
    {
        return TypeDefinitions::FlutterCreditCard;
    }
}
