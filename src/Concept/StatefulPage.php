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

    public string $initialStateName;

    public bool $fullscreenDialog = false;

    protected array $states = [];

    public static function getParentStateId(): string
    {
        return static::$parentStateId;
    }

    public function getInitialStateName(): string
    {
        return $this->initialStateName;
    }

    public function getStates(): array
    {
        return $this->states;
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

    protected function widget(): Json
    {
        return (new MaterialPage)
            ->setChild((new ReactiveWidget)
                ->setParentStateId(static::getParentStateId())
                ->setStateId(static::getStateId())
                ->setState((new ReactiveWidgetState)
                    ->setInitialStateName($this->getInitialStateName())
                    ->setStates($this->getStates())));
    }
}
