<?php

namespace Flutterping\Resources\Renderings;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Json;

class CrossAxisAlignment extends Json
{
    public function getType(): string
    {
        return ElementDefinitions::CrossAxisAlignment;
    }

    public const start = 'start';

    public const end = 'end';

    public const center = 'center';

    public const stretch = 'stretch';

    public const baseline = 'baseline';

    public const values = [
        self::start,
        self::end,
        self::center,
        self::stretch,
        self::baseline,
    ];

    public function __construct(
        protected string $value
    ) {
        if (! in_array($this->value, self::values)) {
            throw new \InvalidArgumentException('Invalid value for CrossAxisAlignment');
        }
    }

    public static function start(): CrossAxisAlignment
    {
        return new static(self::start);
    }

    public static function end(): CrossAxisAlignment
    {
        return new static(self::end);
    }

    public static function center(): CrossAxisAlignment
    {
        return new static(self::center);
    }

    public static function stretch(): CrossAxisAlignment
    {
        return new static(self::stretch);
    }

    public static function baseline(): CrossAxisAlignment
    {
        return new static(self::baseline);
    }
}
