<?php

namespace Flutterping\Resources\Library\Choice\Resources;

use Flutterping\Resources\Json;
use Flutterping\Resources\Library\Choice\Resources\Contracts\ChoicePromptDelegateInterface;
use Flutterping\Resources\Contracts\ColorInterface;
use Flutterping\Resources\Core\CoreDouble;
use Flutterping\Resources\Paintings\ShapeBorder;
use Flutterping\Resources\Renderable;
use Flutterping\Resources\UI\Clip;

class ChoicePromptDelegateBottomSheet extends Json implements ChoicePromptDelegateInterface
{
    protected bool $useSafeArea;

    protected bool $enableDrag;

    protected bool $barrierDismissible;

    protected ColorInterface $barrierColor;

    protected ColorInterface $backgroundColor;

    protected CoreDouble $elevation;

    protected Clip $clipBehavior;

    protected CoreDouble $maxHeightFactor;

    protected ShapeBorder $shape;

    public function setUseSafeArea(bool $useSafeArea): self
    {
        $this->useSafeArea = $useSafeArea;

        return $this;
    }

    public function setEnableDrag(bool $enableDrag): self
    {
        $this->enableDrag = $enableDrag;

        return $this;
    }

    public function setBarrierDismissible(bool $barrierDismissible): self
    {
        $this->barrierDismissible = $barrierDismissible;

        return $this;
    }

    public function setBarrierColor(ColorInterface $barrierColor): self
    {
        $this->barrierColor = $barrierColor;

        return $this;
    }

    public function setBackgroundColor(ColorInterface $backgroundColor): self
    {
        $this->backgroundColor = $backgroundColor;

        return $this;
    }

    public function setElevation(CoreDouble $elevation): self
    {
        $this->elevation = $elevation;

        return $this;
    }

    public function setClipBehavior(Clip $clipBehavior): self
    {
        $this->clipBehavior = $clipBehavior;

        return $this;
    }

    public function setShape(ShapeBorder $shape): self
    {
        $this->shape = $shape;

        return $this;
    }

    public function setMaxHeightFactor(CoreDouble $maxHeightFactor): self
    {
        $this->maxHeightFactor = $maxHeightFactor;

        return $this;
    }

    public function getType(): string
    {
        return 'ChoicePromptDelegateBottomSheet';
    }
}