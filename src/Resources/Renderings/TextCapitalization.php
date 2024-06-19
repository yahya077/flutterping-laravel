<?php

namespace Flutterping\Resources\Renderings;

use Flutterping\Resources\Renderable;

class TextCapitalization extends Renderable
{
    const none = 'none';

    const words = 'words';

    const sentences = 'sentences';

    const characters = 'characters';

    public const values = [
        self::none,
        self::words,
        self::sentences,
        self::characters,
    ];

    public function __construct(
        protected string $value
    ) {
        if (! in_array($this->value, self::values)) {
            throw new \InvalidArgumentException('Invalid value for TextCapitalization');
        }
    }

    public static function none(): TextCapitalization
    {
        return new static(self::none);
    }

    public static function words(): TextCapitalization
    {
        return new static(self::words);
    }

    public static function sentences(): TextCapitalization
    {
        return new static(self::sentences);
    }

    public static function characters(): TextCapitalization
    {
        return new static(self::characters);
    }
}
