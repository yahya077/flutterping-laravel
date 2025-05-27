<?php

namespace Flutterping\Resources\Renderings;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Json;

class WrapAlignment extends Json
{
    public function getType(): string
    {
        return ElementDefinitions::WrapAlignment;
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
            throw new \InvalidArgumentException('Invalid value for WrapAlignment');
        }
    }

    public static function start(): WrapAlignment
    {
        return new static(self::start);
    }

    public static function end(): WrapAlignment
    {
        return new static(self::end);
    }

    public static function center(): WrapAlignment
    {
        return new static(self::center);
    }

    public static function spaceBetween(): WrapAlignment
    {
        return new static(self::spaceBetween);
    }

    public static function spaceAround(): WrapAlignment
    {
        return new static(self::spaceAround);
    }

    public static function spaceEvenly(): WrapAlignment
    {
        return new static(self::spaceEvenly);
    }
}
