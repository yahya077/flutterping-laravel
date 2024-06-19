<?php

namespace Flutterping\FlutterpingLaravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Flutterping\FlutterpingLaravel\FlutterpingLaravel
 */
class FlutterpingLaravel extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Flutterping\FlutterpingLaravel\FlutterpingLaravel::class;
    }
}
