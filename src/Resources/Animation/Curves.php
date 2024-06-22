<?php

namespace Flutterping\Resources\Animation;

class Curves extends Animation
{
    protected const linear = 'linear';
    protected const decelerate = 'decelerate';
    protected const fastOutSlowIn = 'fastOutSlowIn';
    protected const ease = 'ease';
    protected const easeIn = 'easeIn';
    protected const easeOut = 'easeOut';
    protected const easeInOut = 'easeInOut';
    protected const fastLinearToSlowEaseIn = 'fastLinearToSlowEaseIn';
    protected const slowMiddle = 'slowMiddle';
    protected const bounceIn = 'bounceIn';
    protected const bounceOut = 'bounceOut';
    protected const bounceInOut = 'bounceInOut';
    protected const elasticIn = 'elasticIn';
    protected const elasticOut = 'elasticOut';
    protected const elasticInOut = 'elasticInOut';

    public static function linear(): Curves
    {
        return new static(self::linear);
    }

    public static function decelerate(): Curves
    {
        return new static(self::decelerate);
    }

    public static function fastOutSlowIn(): Curves
    {
        return new static(self::fastOutSlowIn);
    }

    public static function ease(): Curves
    {
        return new static(self::ease);
    }

    public static function easeIn(): Curves
    {
        return new static(self::easeIn);
    }

    public static function easeOut(): Curves
    {
        return new static(self::easeOut);
    }

    public static function easeInOut(): Curves
    {
        return new static(self::easeInOut);
    }

    public static function fastLinearToSlowEaseIn(): Curves
    {
        return new static(self::fastLinearToSlowEaseIn);
    }

    public static function slowMiddle(): Curves
    {
        return new static(self::slowMiddle);
    }

    public static function bounceIn(): Curves
    {
        return new static(self::bounceIn);
    }

    public static function bounceOut(): Curves
    {
        return new static(self::bounceOut);
    }

    public static function bounceInOut(): Curves
    {
        return new static(self::bounceInOut);
    }

    public static function elasticIn(): Curves
    {
        return new static(self::elasticIn);
    }

    public static function elasticOut(): Curves
    {
        return new static(self::elasticOut);
    }

    public static function elasticInOut(): Curves
    {
        return new static(self::elasticInOut);
    }
}
