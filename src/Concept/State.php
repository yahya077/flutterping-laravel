<?php

namespace Flutterping\Concept;

use Flutterping\Resources\Renderable;

abstract class State extends Renderable
{
    protected static string $name;

    protected array $actions = [];

    public static function make(): self
    {
        return new static;
    }

    public static function getName(): string
    {
        if (! isset(static::$name)) {
            return (new \ReflectionClass(static::class))->getShortName();
        }

        return static::$name;
    }

    public function getActions(): array
    {
        return $this->actions;
    }

    public function toArray(): ?array
    {
        return (new \Flutterping\Resources\State)
            ->setName(static::getName())
            ->setActions($this->getActions())
            ->toArray();
    }
}
