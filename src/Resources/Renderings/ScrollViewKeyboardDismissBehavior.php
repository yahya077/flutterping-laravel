<?php

namespace Flutterping\Resources\Renderings;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Json;

class ScrollViewKeyboardDismissBehavior extends Json
{
    protected string $value;

    public const onDrag = 'onDrag';

    public const manual = 'manual';

    public const values = [
        self::onDrag,
        self::manual,
    ];

    public function __construct($value)
    {
        if (! in_array($value, self::values)) {
            throw new \InvalidArgumentException('Invalid value for ScrollViewKeyboardDismissBehavior');
        }
        $this->value = $value;
    }

    public static function onDrag(): ScrollViewKeyboardDismissBehavior
    {
        return new static(self::onDrag);
    }

    public static function manual(): ScrollViewKeyboardDismissBehavior
    {
        return new static(self::manual);
    }

    public function getType(): string
    {
        return ElementDefinitions::ScrollViewKeyboardDismissBehavior;
    }
}
