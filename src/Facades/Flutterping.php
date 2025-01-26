<?php

namespace Flutterping\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static string getAppVersion()
 * @method static self setAppVersion(string $appVersion)
 * @method static ?string getAppName()
 * @method static self setAppName(?string $appName)
 * @method static ?string getPackageName()
 * @method static self setPackageName(?string $packageName)
 * @method static ?string getVersion()
 * @method static self setVersion(?string $version)
 * @method static ?string getBuildNumber()
 * @method static self setBuildNumber(?string $buildNumber)
 * @method static ?string getDeviceName()
 * @method static self setDeviceName(?string $deviceName)
 * @method static ?string getDeviceModel()
 * @method static self setDeviceModel(?string $deviceModel)
 * @method static ?string getOsVersion()
 * @method static self setOsVersion(?string $osVersion)
 * @method static ?string getPlatform()
 * @method static self setPlatform(?string $platform)
 * @method static ?string getLocale()
 * @method static self setLocale(?string $locale)
 * @method static ?string getLanguageCode()
 * @method static self setLanguageCode(?string $languageCode)
 * @method static ?string getCountryCode()
 * @method static self setCountryCode(?string $countryCode)
 * @method static ?string getTimezone()
 * @method static self setTimezone(?string $timezone)
 * @method static ?string getSystemTheme()
 * @method static self setSystemTheme(?string $systemTheme)
 * @method static ?string getConnectionType()
 * @method static self setConnectionType(?string $connectionType)
 * @method static ?string getDeepLink()
 * @method static self setDeepLink(?string $deepLink)
 * @method static ?string getAppInstanceId()
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
