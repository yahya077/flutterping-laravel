<?php

namespace Flutterping\Http\Middleware;

use Closure;
use Flutterping\Facades\Flutterping;
use Flutterping\Models\FlutterpingVersion;
use Illuminate\Http\Request;

class ValidateAppVersion
{
    public function handle(Request $request, Closure $next): mixed
    {
        if (collect(config('flutterping.excluded_paths', []))->contains(function ($pattern) use ($request) {
            return fnmatch($pattern, $request->path());
        })) {
            return $next($request);
        }

        if (! $request->header('X-FlutterPing-AppVersion')) {
            throw new \InvalidArgumentException('Invalid Flutterping request.');
        }

        $versionSteps = explode('.', Flutterping::getAppVersion());

        if (count($versionSteps) !== 3) {
            throw new \InvalidArgumentException('Invalid app version format.');
        }

        try {
            $flutterPingVersion = FlutterpingVersion::version((int) $versionSteps[0], (int) $versionSteps[1], (int) $versionSteps[2])->firstOrFail();

            if (! $flutterPingVersion->active && config('app.env') !== 'local') {
                throw new \InvalidArgumentException('Flutterping version is not active.');
            }
        } catch (\Exception $e) {
            throw new \InvalidArgumentException($e->getMessage());
        }

        return $next($request);
    }
}
