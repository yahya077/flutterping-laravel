<?php

namespace Flutterping\Resources\Action;

use Flutterping\Resources\Widgets\Widget;

class UpdateReactiveWidgetAction extends Action
{
    protected Widget $widget;

    protected string $reactiveWidgetId;

    public function setWidget(Widget $widget): self
    {
        $this->widget = $widget;

        return $this;
    }

    public function setReactiveWidgetId(string $reactiveWidgetId): self
    {
        $this->reactiveWidgetId = $reactiveWidgetId;

        return $this;
    }

    public function getActionType(): string
    {
        return 'UpdateReactiveWidgetAction';
    }
}
