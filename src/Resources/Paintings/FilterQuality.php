<?php

namespace Flutterping\Resources\Paintings;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Element;

class FilterQuality extends Element
{
    public function getType(): string
    {
        return ElementDefinitions::FilterQuality;
    }

    const none = 'none';

    const low = 'low';

    const medium = 'medium';

    const high = 'high';

    public const values = [
        self::none,
        self::low,
        self::medium,
        self::high,
    ];

    public function __construct(
        protected string $value
    ) {
        if (! in_array($this->value, self::values)) {
            throw new \InvalidArgumentException('Invalid value for FilterQuality');
        }
    }

    public static function none(): FilterQuality
    {
        return new static(self::none);
    }

    public static function low(): FilterQuality
    {
        return new static(self::low);
    }

    public static function medium(): FilterQuality
    {
        return new static(self::medium);
    }

    public static function high(): FilterQuality
    {
        return new static(self::high);
    }
}
