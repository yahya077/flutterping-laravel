<?php

namespace Flutterping\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static string|null getAppVersion()
 * @method static self setAppVersion(string $appVersion)
 * @method static string|null getAppName()
 * @method static self setAppName(?string $appName)
 * @method static string|null getPackageName()
 * @method static self setPackageName(?string $packageName)
 * @method static string getVersion()
 * @method static self setVersion(?string $version)
 * @method static string|null getBuildNumber()
 * @method static self setBuildNumber(?string $buildNumber)
 * @method static string|null getDeviceName()
 * @method static self setDeviceName(?string $deviceName)
 * @method static string|null getDeviceModel()
 * @method static self setDeviceModel(?string $deviceModel)
 * @method static string|null getOsVersion()
 * @method static self setOsVersion(?string $osVersion)
 * @method static string|null getPlatform()
 * @method static self setPlatform(?string $platform)
 * @method static string|null getLocale()
 * @method static self setLocale(?string $locale)
 * @method static string|null getLanguageCode()
 * @method static self setLanguageCode(?string $languageCode)
 * @method static string|null getCountryCode()
 * @method static self setCountryCode(?string $countryCode)
 * @method static string|null getTimezone()
 * @method static self setTimezone(?string $timezone)
 * @method static string|null getSystemTheme()
 * @method static self setSystemTheme(?string $systemTheme)
 * @method static string|null getConnectionType()
 * @method static self setConnectionType(?string $connectionType)
 * @method static string|null getDeepLink()
 * @method static self setDeepLink(?string $deepLink)
 * @method static string|null getAppInstanceId()
 * @method static self setAppInstanceId(?string $appInstanceId)
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
