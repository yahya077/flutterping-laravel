<?php

namespace Flutterping\Resources\Renderings;

use Flutterping\Resources\Renderable;

class TextInputAction extends Renderable
{
    const done = 'done';

    const next = 'next';

    const previous = 'previous';

    const continueAction = 'continue';

    const join = 'join';

    const route = 'route';

    const search = 'search';

    const send = 'send';

    const none = 'none';

    const unspecified = 'unspecified';

    public const values = [
        self::done,
        self::next,
        self::previous,
        self::continueAction,
        self::join,
        self::route,
        self::search,
        self::send,
        self::none,
        self::unspecified,
    ];

    public function __construct(
        protected string $value
    ) {
        if (! in_array($this->value, self::values)) {
            throw new \InvalidArgumentException('Invalid value for TextInputAction');
        }
    }

    public static function done(): TextInputAction
    {
        return new static(self::done);
    }

    public static function next(): TextInputAction
    {
        return new static(self::next);
    }

    public static function previous(): TextInputAction
    {
        return new static(self::previous);
    }

    public static function continueAction(): TextInputAction
    {
        return new static(self::continueAction);
    }

    public static function join(): TextInputAction
    {
        return new static(self::join);
    }

    public static function route(): TextInputAction
    {
        return new static(self::route);
    }

    public static function search(): TextInputAction
    {
        return new static(self::search);
    }

    public static function send(): TextInputAction
    {
        return new static(self::send);
    }

    public static function none(): TextInputAction
    {
        return new static(self::none);
    }

    public static function unspecified(): TextInputAction
    {
        return new static(self::unspecified);
    }
}
