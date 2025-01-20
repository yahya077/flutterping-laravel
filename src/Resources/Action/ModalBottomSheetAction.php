<?php

namespace Flutterping\Resources\Action;

use Flutterping\Resources\Json;
use Flutterping\Resources\Widgets\Widget;

class ModalBottomSheetAction extends Action
{
    protected bool $enableDrag;

    protected bool $showDragHandle;

    protected bool $isScrollControlled;

    protected bool $useSafeArea;

    protected bool $isDismissible;

    protected Widget|Json $content;

    public function setEnableDrag(bool $enableDrag): self
    {
        $this->enableDrag = $enableDrag;

        return $this;
    }

    public function setShowDragHandle(bool $showDragHandle): self
    {
        $this->showDragHandle = $showDragHandle;

        return $this;
    }

    public function setIsScrollControlled(bool $isScrollControlled): self
    {
        $this->isScrollControlled = $isScrollControlled;

        return $this;
    }

    public function setUseSafeArea(bool $useSafeArea): self
    {
        $this->useSafeArea = $useSafeArea;

        return $this;
    }

    public function setIsDismissible(bool $isDismissible): self
    {
        $this->isDismissible = $isDismissible;

        return $this;
    }

    public function setContent(Widget|Json $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getActionType(): string
    {
        return 'ModalBottomSheetAction';
    }
}
