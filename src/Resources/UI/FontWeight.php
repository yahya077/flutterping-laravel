<?php

namespace Flutterping\Resources\UI;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Element;

class FontWeight extends Element
{
    public function getType(): string
    {
        return ElementDefinitions::FontWeight;
    }

    const w100 = 'w100';
    const w200 = 'w200';
    const w300 = 'w300';
    const w400 = 'w400';
    const w500 = 'w500';
    const w600 = 'w600';
    const w700 = 'w700';
    const w800 = 'w800';
    const w900 = 'w900';

    public const values = [
        self::w100,
        self::w200,
        self::w300,
        self::w400,
        self::w500,
        self::w600,
        self::w700,
        self::w800,
        self::w900,
    ];

    public function __construct(
        protected string $value
    ) {
        if (!in_array($this->value, self::values)) {
            throw new \InvalidArgumentException('Invalid value for FontWeight');
        }
    }

    static public function w100(): FontWeight
    {
        return new static(self::w100);
    }

    static public function w200(): FontWeight
    {
        return new static(self::w200);
    }

    static public function w300(): FontWeight
    {
        return new static(self::w300);
    }

    static public function w400(): FontWeight
    {
        return new static(self::w400);
    }

    static public function w500(): FontWeight
    {
        return new static(self::w500);
    }

    static public function w600(): FontWeight
    {
        return new static(self::w600);
    }

    static public function w700(): FontWeight
    {
        return new static(self::w700);
    }

    static public function w800(): FontWeight
    {
        return new static(self::w800);
    }

    static public function w900(): FontWeight
    {
        return new static(self::w900);
    }
}