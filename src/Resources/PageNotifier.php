<?php

namespace Flutterping\Resources;

use Flutterping\Resources\Value\AbstractValue;

class PageNotifier extends Renderable
{
    protected string $notifierId;

    protected ?AbstractValue $defaultValue;

    public function __construct(string $notifierId, ?AbstractValue $defaultValue = null)
    {
        $this->notifierId = $notifierId;
        $this->defaultValue = $defaultValue;
    }

    public function setDefaultValue(AbstractValue $defaultValue): self
    {
        $this->defaultValue = $defaultValue;

        return $this;
    }
}
