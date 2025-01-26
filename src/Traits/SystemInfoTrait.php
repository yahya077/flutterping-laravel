<?php

namespace Flutterping\Traits;

trait SystemInfoTrait
{
    protected ?string $systemTheme = null;

    protected ?string $connectionType = null;

    protected ?string $deepLink = null;

    protected ?string $appInstanceId = null;

    public function setSystemTheme(?string $systemTheme): self
    {
        $this->systemTheme = $systemTheme;

        return $this;
    }

    public function getSystemTheme(): ?string
    {
        return $this->systemTheme;
    }

    public function setConnectionType(?string $connectionType): self
    {
        $this->connectionType = $connectionType;

        return $this;
    }

    public function getConnectionType(): ?string
    {
        return $this->connectionType;
    }

    public function setDeepLink(?string $deepLink): self
    {
        $this->deepLink = $deepLink;

        return $this;
    }

    public function getDeepLink(): ?string
    {
        return $this->deepLink;
    }

    public function setAppInstanceId(?string $appInstanceId): self
    {
        $this->appInstanceId = $appInstanceId;

        return $this;
    }

    public function getAppInstanceId(): ?string
    {
        return $this->appInstanceId;
    }
}
