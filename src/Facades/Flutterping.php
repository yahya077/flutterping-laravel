<?php

namespace Flutterping\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static void appVersion(\Closure|string|null $version)
 * @method static string getAppVersion()
 *
 * @see \Flutterping\Flutterping
 */
class Flutterping extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Flutterping\Flutterping::class;
    }
}
