<?php

namespace Flutterping\Resources\Paintings;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Json;

class Alignment extends Json
{
    public function getType(): string
    {
        return ElementDefinitions::Alignment;
    }

    public const topLeft = 'topLeft';

    public const topCenter = 'topCenter';

    public const topRight = 'topRight';

    public const centerLeft = 'centerLeft';

    public const center = 'center';

    public const centerRight = 'centerRight';

    public const bottomLeft = 'bottomLeft';

    public const bottomCenter = 'bottomCenter';

    public const bottomRight = 'bottomRight';

    public const values = [
        self::topLeft,
        self::topCenter,
        self::topRight,
        self::centerLeft,
        self::center,
        self::centerRight,
        self::bottomLeft,
        self::bottomCenter,
        self::bottomRight,
    ];

    public function __construct(
        protected string $value
    ) {
        if (! in_array($this->value, self::values)) {
            throw new \InvalidArgumentException('Invalid value for Alignment');
        }
    }

    public static function topLeft(): Alignment
    {
        return new static(self::topLeft);
    }

    public static function topCenter(): Alignment
    {
        return new static(self::topCenter);
    }

    public static function topRight(): Alignment
    {
        return new static(self::topRight);
    }

    public static function centerLeft(): Alignment
    {
        return new static(self::centerLeft);
    }

    public static function center(): Alignment
    {
        return new static(self::center);
    }

    public static function centerRight(): Alignment
    {
        return new static(self::centerRight);
    }

    public static function bottomLeft(): Alignment
    {
        return new static(self::bottomLeft);
    }

    public static function bottomCenter(): Alignment
    {
        return new static(self::bottomCenter);
    }

    public static function bottomRight(): Alignment
    {
        return new static(self::bottomRight);
    }
}
