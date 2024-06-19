<?php

namespace Flutterping;

use Closure;
use Illuminate\Support\Facades\App;

class Flutterping
{
    protected Closure|string|null $appVersion;

    public function appVersion($appVersion): void
    {
        $this->appVersion = $appVersion;
    }

    public function getAppVersion(): string
    {
        $appVersion = $this->appVersion instanceof Closure
            ? App::call($this->appVersion)
            : $this->appVersion;

        return (string) $appVersion;
    }
}
