<?php

namespace Flutterping\Concept;

use Flutterping\Models\Widget;

// TODO move route related properties to a trait
abstract class Page extends Widget
{
    protected static ?string $stateId = null;

    protected static ?string $routeStateId = null;

    protected static ?string $routeName = null;

    protected static ?string $routePath = null;

    protected static bool $isRootRoute = false;

    protected static int $routeStackIndex = 0;

    public static function getRouteStateId(): string
    {
        if (! isset(static::$routeStateId)) {
            $routeStateId = (new \ReflectionClass(static::class))->getShortName();
            $routeStateId = str_replace('Page', '', $routeStateId);
            $routeStateId .= 'StateId';

            return lcfirst($routeStateId);
        }

        return static::$routeStateId;
    }

    public static function getRouteName(): string
    {
        if (static::$routeName == null) {
            $routeName = (new \ReflectionClass(static::class))->getShortName();
            $routeName = str_replace('Page', '', $routeName);

            return lcfirst($routeName);
        }

        return static::$routeName;
    }

    public static function getRoutePath(): string
    {
        if (static::$routePath == null) {
            $routePath = (new \ReflectionClass(static::class))->getShortName();
            $routePath = str_replace('Page', '', $routePath);
            $routePath = lcfirst($routePath);

            if (static::$isRootRoute === true) {
                return sprintf('/%s', $routePath);
            }

            return $routePath;
        }

        return static::$routePath;
    }

    public static function getRouteStackIndex(): int
    {
        return static::$routeStackIndex;
    }

    public static function getStateId(): string
    {
        return static::$stateId;
    }
}
