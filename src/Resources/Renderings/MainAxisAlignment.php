<?php

namespace Flutterping\Resources\Renderings;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Element;

class MainAxisAlignment extends Element
{
    public function getType(): string
    {
        return ElementDefinitions::MainAxisAlignment;
    }

    public const start = 'start';

    public const end = 'end';

    public const center = 'center';

    public const spaceBetween = 'spaceBetween';

    public const spaceAround = 'spaceAround';

    public const spaceEvenly = 'spaceEvenly';

    public const values = [
        self::start,
        self::end,
        self::center,
        self::spaceBetween,
        self::spaceAround,
        self::spaceEvenly,
    ];

    public function __construct(
        protected string $value
    ) {
        if (! in_array($this->value, self::values)) {
            throw new \InvalidArgumentException('Invalid value for MainAxisAlignment');
        }
    }

    public static function start(): MainAxisAlignment
    {
        return new static(self::start);
    }

    public static function end(): MainAxisAlignment
    {
        return new static(self::end);
    }

    public static function center(): MainAxisAlignment
    {
        return new static(self::center);
    }

    public static function spaceBetween(): MainAxisAlignment
    {
        return new static(self::spaceBetween);
    }

    public static function spaceAround(): MainAxisAlignment
    {
        return new static(self::spaceAround);
    }

    public static function spaceEvenly(): MainAxisAlignment
    {
        return new static(self::spaceEvenly);
    }
}
