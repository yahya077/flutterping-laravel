<?php

namespace Flutterping\Resources\UI;

class TextInputType extends UI
{
    const text = 'text';

    const multiline = 'multiline';

    const number = 'number';

    const phone = 'phone';

    const datetime = 'datetime';

    const emailAddress = 'emailAddress';

    const url = 'url';

    const visiblePassword = 'visiblePassword';

    const name = 'name';

    const address = 'address';

    const streetAddress = 'streetAddress';

    const none = 'none';

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

    public static function name(): TextInputType
    {
        return new static(self::name);
    }

    public static function address(): TextInputType
    {
        return new static(self::address);
    }

    public static function streetAddress(): TextInputType
    {
        return new static(self::streetAddress);
    }

    public static function none(): TextInputType
    {
        return new static(self::none);
    }
}
