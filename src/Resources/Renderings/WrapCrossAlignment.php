<?php

namespace Flutterping\Resources\Renderings;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Json;

class WrapCrossAlignment extends Json
{
    public function getType(): string
    {
        return ElementDefinitions::WrapCrossAlignment;
    }

    public const start = 'start';

    public const end = 'end';

    public const center = 'center';

    public const values = [
        self::start,
        self::end,
        self::center,
    ];

    public function __construct(
        protected string $value
    ) {
        if (! in_array($this->value, self::values)) {
            throw new \InvalidArgumentException('Invalid value for CrossAxisAlignment');
        }
    }

    public static function start(): WrapCrossAlignment
    {
        return new static(self::start);
    }

    public static function end(): WrapCrossAlignment
    {
        return new static(self::end);
    }

    public static function center(): WrapCrossAlignment
    {
        return new static(self::center);
    }
}
