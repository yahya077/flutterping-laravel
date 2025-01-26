<?php

namespace Flutterping\Traits;

trait AppInfoTrait
{
    protected ?string $appVersion;

    protected ?string $appName = null;

    protected ?string $packageName = null;

    protected ?string $version = null;

    protected ?string $buildNumber = null;

    public function setAppVersion($appVersion): self
    {
        $this->appVersion = $appVersion;

        return $this;
    }

    public function getAppVersion(): string
    {
        return $this->appVersion;
    }

    public function setAppName(?string $appName): self
    {
        $this->appName = $appName;

        return $this;
    }

    public function getAppName(): ?string
    {
        return $this->appName;
    }

    public function setPackageName(?string $packageName): self
    {
        $this->packageName = $packageName;

        return $this;
    }

    public function getPackageName(): ?string
    {
        return $this->packageName;
    }

    public function setVersion(?string $version): self
    {
        $this->version = $version;

        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setBuildNumber(?string $buildNumber): self
    {
        $this->buildNumber = $buildNumber;

        return $this;
    }

    public function getBuildNumber(): ?string
    {
        return $this->buildNumber;
    }
}
