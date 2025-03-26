<?php

namespace Flutterping\Http\Middleware;

use Closure;
use Flutterping\Facades\Flutterping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HandleFlutterpingRequests
{
    public function handle(Request $request, Closure $next): mixed
    {
        Flutterping::setAppVersion($request->header('x-flutterping-appversion', '0.0.0'))
            ->setAppName($request->header('x-flutterping-appname'))
            ->setPackageName($request->header('x-flutterping-packagename'))
            ->setVersion($request->header('x-flutterping-version'))
            ->setBuildNumber($request->header('x-flutterping-buildnumber'))
            ->setDeviceName($request->header('x-flutterping-devicename'))
            ->setDeviceModel($request->header('x-flutterping-devicemodel'))
            ->setOsVersion($request->header('x-flutterping-osversion'))
            ->setPlatform($request->header('x-flutterping-platform'))
            ->setLocale($request->header('x-flutterping-locale'))
            ->setLanguageCode($request->header('x-flutterping-languagecode'))
            ->setCountryCode($request->header('x-flutterping-countrycode'))
            ->setTimezone($request->header('x-flutterping-timezone'))
            ->setSystemTheme($request->header('x-flutterping-systemtheme'))
            ->setConnectionType($request->header('x-flutterping-connectiontype'))
            ->setDeepLink($request->header('x-flutterping-deeplink'))
            ->setAppInstanceId($request->header('x-flutterping-appinstanceid'));

        app()->setLocale($request->header('x-flutterping-languagecode'));

        return $next($request);
    }
}
