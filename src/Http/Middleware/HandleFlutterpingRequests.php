<?php

namespace Flutterping\Http\Middleware;

use Closure;
use Flutterping\Facades\Flutterping;
use Illuminate\Http\Request;

class HandleFlutterpingRequests
{
    public function handle(Request $request, Closure $next): mixed
    {
        if (! $request->header('X-FlutterPing')) {
            return $next($request);
        }

        Flutterping::appVersion($request->header('X-FlutterPing-AppVersion', '0.0.0'));

        if (is_array(config('flutter-ping.availableAppVersions')) && ! empty(config('flutter-ping.availableAppVersions'))) {
            if (! in_array(Flutterping::getAppVersion(), config('flutter-ping.availableAppVersions'))) {
                return response()->json(['message' => 'App version not supported'], 400);
            }
        }

        return $next($request);
    }
}
