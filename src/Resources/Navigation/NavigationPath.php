<?php

namespace Flutterping\Resources\Navigation;

use Flutterping\Resources\Definitions\ElementDefinitions;

class NavigationPath extends Path
{
    protected ?string $navigatorKey = null;

    protected ?string $stackKey = null;

    protected ?string $navigationType = null;

    protected ?int $index = null;

    protected ?array $queryParameters = null;

    protected ?array $pathParameters = null;

    public function setNavigatorKey($navigatorKey)
    {
        $this->navigatorKey = $navigatorKey;

        return $this;
    }

    public function setStackKey($stackKey)
    {
        $this->stackKey = $stackKey;

        return $this;
    }

    public function setIndex($index)
    {
        $this->index = $index;

        return $this;
    }

    public function setQueryParameters($queryParameters)
    {
        $this->queryParameters = $queryParameters;

        return $this;
    }

    public function setPathParameters($pathParameters)
    {
        $this->pathParameters = $pathParameters;

        return $this;
    }

    public function setNavigationType($navigationType)
    {
        $this->navigationType = $navigationType;

        return $this;
    }

    public function getType(): string
    {
        return ElementDefinitions::NavigationPath;
    }
}
