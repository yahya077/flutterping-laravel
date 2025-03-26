<?php

namespace Flutterping\Resources\Core;

use Flutterping\Resources\Renderable;

class Duration extends Renderable
{
    public function __construct(
        protected mixed $milliseconds
    ) {
        if (! is_int($this->milliseconds)) {
            throw new \InvalidArgumentException('Invalid value for Duration');
        }
    }

    public static function fromDays(int $days): Duration
    {
        return new static($days * 86400000);
    }

    public static function fromHours(int $hours): Duration
    {
        return new static($hours * 3600000);
    }

    public static function fromMinutes(int $minutes): Duration
    {
        return new static($minutes * 60000);
    }

    public static function fromSeconds(int $seconds): Duration
    {
        return new static($seconds * 1000);
    }

    public static function fromMilliseconds(int $milliseconds): Duration
    {
        return new static($milliseconds);
    }

    public static function zero(): Duration
    {
        return new static(0);
    }
}
