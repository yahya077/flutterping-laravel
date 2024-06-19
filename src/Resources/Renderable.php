<?php

namespace Flutterping\Resources;

use ReturnTypeWillChange;

abstract class Renderable implements \JsonSerializable
{
    #[ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return $this->toArray();
    }

    #[ReturnTypeWillChange]
    public function render()
    {
        return $this->jsonSerialize();
    }

    public function toArray(): ?array
    {
        return get_object_vars($this);
    }

    public function __toString(): string
    {
        return json_encode($this->toArray());
    }

    public function __debugInfo(): array
    {
        return $this->toArray();
    }

    public static function make($data): static
    {
        return new static($data);
    }
}
