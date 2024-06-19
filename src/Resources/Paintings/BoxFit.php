<?php

namespace Flutterping\Resources\Paintings;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Element;

class BoxFit extends Element
{
    public function getType(): string
    {
        return ElementDefinitions::BoxFit;
    }
    const fill = 'fill';
    const contain = 'contain';
    const cover = 'cover';
    const fitWidth = 'fitWidth';
    const fitHeight = 'fitHeight';
    const none = 'none';
    const scaleDown = 'scaleDown';

    public const values = [
        self::fill,
        self::contain,
        self::cover,
        self::fitWidth,
        self::fitHeight,
        self::none,
        self::scaleDown,
    ];

    public function __construct(
        protected string $value
    ) {
        if (!in_array($this->value, self::values)) {
            throw new \InvalidArgumentException('Invalid value for BoxFit');
        }
    }

    static public function fill(): BoxFit
    {
        return new static(self::fill);
    }

    static public function contain(): BoxFit
    {
        return new static(self::contain);
    }

    static public function cover(): BoxFit
    {
        return new static(self::cover);
    }

    static public function fitWidth(): BoxFit
    {
        return new static(self::fitWidth);
    }

    static public function fitHeight(): BoxFit
    {
        return new static(self::fitHeight);
    }

    static public function none(): BoxFit
    {
        return new static(self::none);
    }

    static public function scaleDown(): BoxFit
    {
        return new static(self::scaleDown);
    }

    public function setValue(string $value): void
    {
        $this->value = $value;
    }
}
