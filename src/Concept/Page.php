<?php

namespace Flutterping\Concept;

use Flutterping\Models\Widget;

//TODO move route related properties to a trait
abstract class Page extends Widget
{
    public static string $stateId;

    public string $routeStateId;

    public string $routeName;

    public string $routePath;
    public bool $isRootRoute = false;
    public int $routeStackIndex = 0;

    public function getRouteStateId(): string
    {
        if (!isset($this->routeStateId)) {
            $className = (new \ReflectionClass($this))->getShortName();
            $className = str_replace('Page', '', $className);
            $className .= 'StateId';
            $className = lcfirst($className);
            $this->routeStateId = $className;
        }

        return $this->routeStateId;
    }

    public function getRouteName(): string
    {
        if (!isset($this->routeName)) {
            $className = (new \ReflectionClass($this))->getShortName();
            $className = str_replace('Page', '', $className);
            $className = lcfirst($className);
            $this->routeName = $className;
        }

        return $this->routeName;
    }

    public function getRoutePath(): string
    {
        if (!isset($this->routePath)) {
            $className = (new \ReflectionClass($this))->getShortName();
            $className = str_replace('Page', '', $className);
            $className = lcfirst($className);
            $this->routePath = $className;
        }

        if ($this->isRootRoute === true) {
            return sprintf('/%s', $this->routePath);
        }

        return $this->routePath;
    }

    public function getRouteStackIndex(): int
    {
        return $this->routeStackIndex;
    }

    public static function getStateId(): string
    {
        return static::$stateId;
    }
}
