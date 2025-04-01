<?php

namespace Flutterping\Http\Middleware;

use Closure;
use Flutterping\Exceptions\InactiveVersionException;
use Flutterping\Exceptions\InvalidAppVersionException;
use Flutterping\Models\FlutterpingVersion;
use Illuminate\Http\Request;

class ValidateAppVersion
{
    /**
     * @throws InvalidAppVersionException
     * @throws InactiveVersionException
     */
    public function handle(Request $request, Closure $next): mixed
    {
        if (collect(config('flutterping.excluded_paths', []))->contains(function ($pattern) use ($request) {
            return fnmatch($pattern, $request->path());
        })) {
            return $next($request);
        }

        FlutterpingVersion::getCurrentVersion();

        return $next($request);
    }
}
