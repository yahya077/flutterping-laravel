<?php

namespace Flutterping\Resources\Contracts;

interface JsonInterface
{
    public function getType(): string;
    public function toArray(): ?array;
}
