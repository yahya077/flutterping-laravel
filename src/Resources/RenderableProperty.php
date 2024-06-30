<?php

namespace Flutterping\Resources;

abstract class RenderableProperty extends Renderable
{
    public function __construct(protected string $value)
    {
        if (! in_array($this->value, self::values())) {
            throw new \InvalidArgumentException('Invalid value for '.static::class);
        }
    }

    public static function values(): array
    {
        return array_values((new \ReflectionClass(static::class))->getConstants());
    }

    public static function __callStatic($name, $arguments)
    {
        return new static($name);
    }

    public function render(): string
    {
        return $this->value;
    }
}
