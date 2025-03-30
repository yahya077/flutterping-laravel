<?php

namespace Flutterping\Http\Middleware;

use Closure;
use Flutterping\Exceptions\InactiveVersionException;
use Flutterping\Exceptions\InvalidAppVersionException;
use Flutterping\Exceptions\MissingHeaderException;
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
            throw new MissingHeaderException('X-FlutterPing-AppVersion');
        }

        $versionSteps = explode('.', Flutterping::getAppVersion());

        if (count($versionSteps) !== 3) {
            throw new InvalidAppVersionException('Invalid app version format. Expected format: x.y.z');
        }

        try {
            $flutterPingVersion = FlutterpingVersion::version(
                (int) $versionSteps[0],
                (int) $versionSteps[1],
                (int) $versionSteps[2]
            )->firstOrFail();

            if (! $flutterPingVersion->active && config('app.env') !== 'local') {
                throw new InactiveVersionException;
            }
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            throw new InvalidAppVersionException('App version not found in the database.');
        } catch (InactiveVersionException $e) {
            throw $e;
        } catch (\Exception $e) {
            throw new InvalidAppVersionException($e->getMessage());
        }

        return $next($request);
    }
}
