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
        if (! in_array($this->value, self::values)) {
            throw new \InvalidArgumentException('Invalid value for TextInputType');
        }
    }

    public static function text(): TextInputType
    {
        return new static(self::text);
    }

    public static function multiline(): TextInputType
    {
        return new static(self::multiline);
    }

    public static function number(): TextInputType
    {
        return new static(self::number);
    }

    public static function phone(): TextInputType
    {
        return new static(self::phone);
    }

    public static function datetime(): TextInputType
    {
        return new static(self::datetime);
    }

    public static function emailAddress(): TextInputType
    {
        return new static(self::emailAddress);
    }

    public static function url(): TextInputType
    {
        return new static(self::url);
    }

    public static function visiblePassword(): TextInputType
    {
        return new static(self::visiblePassword);
    }
}
