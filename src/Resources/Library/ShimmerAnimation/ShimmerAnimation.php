<?php

namespace Flutterping\Resources\Library\ShimmerAnimation;

use Flutterping\Resources\Core\Duration;
use Flutterping\Resources\Json;
use Flutterping\Resources\Paintings\Gradient;
use Flutterping\Resources\Widgets\Widget;

class ShimmerAnimation extends Widget
{
    protected Gradient $gradient;

    protected Json $child;
    protected ShimmerDirection $shimmerDirection;

    protected Duration $duration;

    protected int $loop;

    protected bool $enabled;

    public function setGradient(Gradient $gradient): self
    {
        $this->gradient = $gradient;

        return $this;
    }

    public function setShimmerDirection(ShimmerDirection $shimmerDirection): self
    {
        $this->shimmerDirection = $shimmerDirection;

        return $this;
    }

    public function setDuration(Duration $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function setLoop(int $loop): self
    {
        $this->loop = $loop;

        return $this;
    }

    public function setEnabled(bool $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }

    public function setChild(Json $child): self
    {
        $this->child = $child;

        return $this;
    }

    public function getType(): string
    {
        return "ShimmerAnimation";
    }
}
