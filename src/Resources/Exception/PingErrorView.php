<?php

namespace Flutterping\Resources\Exception;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Widgets\Widget;

class PingErrorView extends Widget
{
    public function getType(): string
    {
        return ElementDefinitions::PingErrorView;
    }

    protected mixed $error = null;

    protected ?string $stackTrace = null;

    protected ?array $requestInfo = null;

    protected ?array $context = null;

    protected ?array $appInfo = null;

    protected ?bool $showFullDetails = true;

    protected Widget|Json|null $productionWidget = null;

    protected Widget|Json|null $customErrorView = null;

    protected ?string $onReport = null;

    public function setError(mixed $error): self
    {
        $this->error = $error;

        return $this;
    }

    public function setStackTrace(string $stackTrace): self
    {
        $this->stackTrace = $stackTrace;

        return $this;
    }

    public function setRequestInfo(array $requestInfo): self
    {
        $this->requestInfo = $requestInfo;

        return $this;
    }

    public function setContext(array $context): self
    {
        $this->context = $context;

        return $this;
    }

    public function setAppInfo(array $appInfo): self
    {
        $this->appInfo = $appInfo;

        return $this;
    }

    public function setShowFullDetails(bool $showFullDetails): self
    {
        $this->showFullDetails = $showFullDetails;

        return $this;
    }

    public function setProductionWidget(Widget|Json $productionWidget): self
    {
        $this->productionWidget = $productionWidget;

        return $this;
    }

    public function setCustomErrorView(Widget|Json $customErrorView): self
    {
        $this->customErrorView = $customErrorView;

        return $this;
    }

    public function setOnReport(string $actionName): self
    {
        $this->onReport = $actionName;

        return $this;
    }
}
