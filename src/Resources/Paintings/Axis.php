<?php

namespace Flutterping\Resources\Paintings;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Element;

class Axis extends Element
{
    protected string $value;
    public const horizontal = 'horizontal';
    public const vertical = 'vertical';

    public const values = [
        self::horizontal,
        self::vertical,
    ];

    public function __construct($value)
    {
        if (!in_array($value, self::values)) {
            throw new \InvalidArgumentException('Invalid value for Axis');
        }
        $this->value = $value;
    }

    static public function horizontal(): Axis
    {
        return new static(self::horizontal);
    }

    static public function vertical(): Axis
    {
        return new static(self::vertical);
    }

    public function getType(): string
    {
        return ElementDefinitions::Axis;
    }
}