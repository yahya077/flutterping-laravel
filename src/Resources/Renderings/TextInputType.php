<?php

namespace Flutterping\Resources\Renderings;

use Flutterping\Resources\Renderable;

class TextInputType extends Renderable
{
    const text = 'text';
    const multiline = 'multiline';
    const number = 'number';
    const phone = 'phone';
    const datetime = 'datetime';
    const emailAddress = 'emailAddress';
    const url = 'url';
    const visiblePassword = 'visiblePassword';

    public const values = [
        self::text,
        self::multiline,
        self::number,
        self::phone,
        self::datetime,
        self::emailAddress,
        self::url,
        self::visiblePassword,
    ];

    public function __construct(
        protected string $value
    ) {
        if (!in_array($this->value, self::values)) {
            throw new \InvalidArgumentException('Invalid value for TextInputType');
        }
    }

    static public function text(): TextInputType
    {
        return new static(self::text);
    }

    static public function multiline(): TextInputType
    {
        return new static(self::multiline);
    }

    static public function number(): TextInputType
    {
        return new static(self::number);
    }

    static public function phone(): TextInputType
    {
        return new static(self::phone);
    }

    static public function datetime(): TextInputType
    {
        return new static(self::datetime);
    }

    static public function emailAddress(): TextInputType
    {
        return new static(self::emailAddress);
    }

    static public function url(): TextInputType
    {
        return new static(self::url);
    }

    static public function visiblePassword(): TextInputType
    {
        return new static(self::visiblePassword);
    }
}
