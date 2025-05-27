<?php

namespace Flutterping\Resources\Paintings;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Json;

class VerticalDirection extends Json
{
    protected string $value;

    public const up = 'up';

    public const down = 'down';

    public const values = [
        self::up,
        self::down,
    ];

    public function __construct($value)
    {
        if (! in_array($value, self::values)) {
            throw new \InvalidArgumentException('Invalid value for Axis');
        }
        $this->value = $value;
    }

    public static function up(): VerticalDirection
    {
        return new static(self::up);
    }

    public static function down(): VerticalDirection
    {
        return new static(self::down);
    }

    public function getType(): string
    {
        return ElementDefinitions::VerticalDirection;
    }
}
