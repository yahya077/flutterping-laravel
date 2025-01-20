<?php

namespace Flutterping\Resources\Library\WebviewFlutter\Resources;

use Flutterping\Resources\Event\BaseEvent;
use Flutterping\Resources\Library\WebviewFlutter\Definitions\TypeDefinitions;
use Flutterping\Resources\Widgets\Widget;

class WebviewFlutter extends Widget
{
    protected string $url;

    protected string $clientName;

    protected BaseEvent $onProgress;

    protected BaseEvent $onPageStarted;

    protected BaseEvent $onPageFinished;

    protected BaseEvent $onWebResourceError;

    protected BaseEvent $onNavigationRequest;

    protected BaseEvent $onUrlChange;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function setClientName(string $clientName): self
    {
        $this->clientName = $clientName;

        return $this;
    }

    public function setOnProgress(BaseEvent $onProgress): self
    {
        $this->onProgress = $onProgress;

        return $this;
    }

    public function setOnPageStarted(BaseEvent $onPageStarted): self
    {
        $this->onPageStarted = $onPageStarted;

        return $this;
    }

    public function setOnPageFinished(BaseEvent $onPageFinished): self
    {
        $this->onPageFinished = $onPageFinished;

        return $this;
    }

    public function setOnWebResourceError(BaseEvent $onWebResourceError): self
    {
        $this->onWebResourceError = $onWebResourceError;

        return $this;
    }

    public function setOnNavigationRequest(BaseEvent $onNavigationRequest): self
    {
        $this->onNavigationRequest = $onNavigationRequest;

        return $this;
    }

    public function setOnUrlChange(BaseEvent $onUrlChange): self
    {
        $this->onUrlChange = $onUrlChange;

        return $this;
    }

    public function getType(): string
    {
        return TypeDefinitions::WebviewFlutter;
    }
}
