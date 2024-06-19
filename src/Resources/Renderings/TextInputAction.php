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
        if (!in_array($this->value, self::values)) {
            throw new \InvalidArgumentException('Invalid value for TextInputAction');
        }
    }

    static public function done(): TextInputAction
    {
        return new static(self::done);
    }

    static public function next(): TextInputAction
    {
        return new static(self::next);
    }

    static public function previous(): TextInputAction
    {
        return new static(self::previous);
    }

    static public function continueAction(): TextInputAction
    {
        return new static(self::continueAction);
    }

    static public function join(): TextInputAction
    {
        return new static(self::join);
    }

    static public function route(): TextInputAction
    {
        return new static(self::route);
    }

    static public function search(): TextInputAction
    {
        return new static(self::search);
    }

    static public function send(): TextInputAction
    {
        return new static(self::send);
    }

    static public function none(): TextInputAction
    {
        return new static(self::none);
    }

    static public function unspecified(): TextInputAction
    {
        return new static(self::unspecified);
    }
}
