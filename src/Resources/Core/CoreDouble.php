<?php

namespace Flutterping\Resources\Core;

use Flutterping\Resources\Renderable;

class CoreDouble extends Renderable
{
    public function __construct(
        protected mixed $value
    ) {
        if (! in_array($this->value, self::values)) {
            if (! is_numeric($this->value)) {
                throw new \InvalidArgumentException('Invalid value for Double');
            }
        }
    }

    const infinity = 'infinity';

    const negativeInfinity = 'negativeInfinity';

    const nan = 'nan';

    const minPositive = 'minPositive';

    const maxFinite = 'maxFinite';

    const values = [
        self::infinity,
        self::negativeInfinity,
        self::nan,
        self::minPositive,
        self::maxFinite,
    ];

    public static function infinity()
    {
        return new static(self::infinity);
    }

    public static function negativeInfinity()
    {
        return new static(self::negativeInfinity);
    }

    public static function nan()
    {
        return new static(self::nan);
    }

    public static function minPositive()
    {
        return new static(self::minPositive);
    }

    public static function maxFinite()
    {
        return new static(self::maxFinite);
    }

    public function jsonSerialize(): mixed
    {
        return $this->value;
    }
}
