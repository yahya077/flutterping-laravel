<?php

namespace Flutterping\Concept;

use Flutterping\Resources\Action\Action;
use Flutterping\Resources\Action\EventDispatchAction;
use Flutterping\Resources\Action\UpdateReactiveWidgetAction;
use Flutterping\Resources\Event\ActionEvent;
use Flutterping\Resources\Json;
use Flutterping\Resources\Page\MaterialPage;
use Flutterping\Resources\ReactiveWidgetState;
use Flutterping\Resources\Scope;
use Flutterping\Resources\Widgets\ReactiveWidget;
use Flutterping\Resources\Widgets\Widget;

abstract class StatefulPage extends Page
{
    public static string $parentStateId;

    public static string $initialStateName;

    public static bool $fullscreenDialog = false;

    protected static array $states = [];

    protected static array $pageNotifiers = [];

    protected static ?string $stateId = null;

    public static function getParentStateId(): string
    {
        return static::$parentStateId;
    }

    public static function getInitialStateName(): string // Made this method static
    {
        return static::$initialStateName;
    }

    public function getStates(): array
    {
        return static::$states;
    }

    public function getPageNotifiers(): array
    {
        return static::$pageNotifiers;
    }

    public static function updateWidgetAction(Json|Widget $widget): Action
    {
        return (new UpdateReactiveWidgetAction)
            ->setReactiveWidgetId(static::getStateId())
            ->setWidget($widget);
    }

    public static function updateWidgetEvent(Json|Widget $widget): ActionEvent
    {
        return (new ActionEvent)
            ->setStateId(static::getStateId())
            ->setAction(static::updateWidgetAction($widget));
    }

    public static function getStateEvent(string $state, ?Scope $scope = null): ActionEvent
    {
        return (new ActionEvent)
            ->setStateId(static::getStateId())
            ->setAction((new EventDispatchAction(static::getStateId(), 'StateEvent', $state, $scope)));
    }

    public static function getStateAction(string $state): Action
    {
        return new EventDispatchAction(static::getStateId(), 'StateEvent', $state);
    }

    public static function getStateId(): string
    {
        return static::$stateId;
    }

    protected function widget(): Json
    {
        return (new MaterialPage)
            ->setFullscreenDialog(static::$fullscreenDialog)
            ->setChild((new ReactiveWidget)
                ->setParentStateId(static::getParentStateId())
                ->setStateId(static::getStateId())
                ->setPageNotifiers($this->getPageNotifiers())
                ->setState((new ReactiveWidgetState)
                    ->setInitialStateName(static::getInitialStateName())
                    ->setStates($this->getStates())));
    }
}
