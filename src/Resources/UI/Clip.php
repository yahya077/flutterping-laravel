<?php

namespace Flutterping\Resources\UI;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Element;

class Clip extends Element
{
    public function __construct(protected string $clip)
    {
        if (!in_array($this->clip, self::clips)) {
            throw new \InvalidArgumentException('Invalid value for Clip');
        }
    }

    const antiAlias = 'antiAlias';
    const hardEdge = 'hardEdge';
    const antiAliasWithSaveLayer = 'antiAliasWithSaveLayer';
    const none = 'none';

    public const clips = [
        self::antiAlias,
        self::hardEdge,
        self::antiAliasWithSaveLayer,
        self::none,
    ];

    public function getType(): string
    {
        return ElementDefinitions::Clip;
    }

    public static function antiAlias(): Clip
    {
        return new static(self::antiAlias);
    }

    public static function hardEdge(): Clip
    {
        return new static(self::hardEdge);
    }

    public static function antiAliasWithSaveLayer(): Clip
    {
        return new static(self::antiAliasWithSaveLayer);
    }

    public static function none(): Clip
    {
        return new static(self::none);
    }
}
