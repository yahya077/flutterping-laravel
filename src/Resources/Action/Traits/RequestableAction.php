<?php

namespace Flutterping\Resources\Action\Traits;

use Flutterping\Resources\Action\NetworkRequestAction;
use Flutterping\Resources\Navigation\ApiPath;
use Flutterping\Resources\Value\AbstractValue;

trait RequestableAction
{
    protected ApiPath $path;

    protected string $client;

    protected string $method;

    protected array $headers;

    protected AbstractValue $body;

    public function setClient(string $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function setMethod(string $method): self
    {
        $this->method = $method;

        return $this;
    }

    public function setHeaders(array $headers): self
    {
        $this->headers = $headers;

        return $this;
    }

    public function setBody(AbstractValue $body): self
    {
        $this->body = $body;

        return $this;
    }

    /**
     * @return NetworkRequestAction|RequestableAction
     */
    public function setPath(ApiPath $path): self
    {
        $this->path = $path;

        return $this;
    }
}
