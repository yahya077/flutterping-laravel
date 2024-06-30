<?php

namespace Flutterping\Resources;

class Scope extends Renderable
{
    public string $id;
    /**
     * @param array<string, mixed> $scopeContext
     */
    public array $context;

    public function __construct(string $id)
    {
        $this->id = $id;
    }

    /**
     * @param array<string, mixed> $context
     */
    public function setContext(array $context): self
    {
        $this->context = $context;
        return $this;
    }
}
