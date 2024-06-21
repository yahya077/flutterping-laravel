<?php

namespace Flutterping\Resources\Renderings;

use Flutterping\Resources\Definitions\ElementDefinitions;

class SliverGridDelegateWithFixedCrossAxisCount extends SliverGridDelegate
{
    protected float $mainAxisSpacing = 0.0;

    protected float $crossAxisSpacing = 0.0;

    protected float $childAspectRatio = 1.0;

    public function getType(): string
    {
        return ElementDefinitions::SliverGridDelegateWithFixedCrossAxisCount;
    }

    public function __construct(
        protected int $crossAxisCount,
    ) {}

    public function setCrossAxisCount(int $crossAxisCount): self
    {
        $this->crossAxisCount = $crossAxisCount;

        return $this;
    }

    public function setMainAxisSpacing(float $mainAxisSpacing): self
    {
        $this->mainAxisSpacing = $mainAxisSpacing;

        return $this;
    }

    public function setCrossAxisSpacing(float $crossAxisSpacing): self
    {
        $this->crossAxisSpacing = $crossAxisSpacing;

        return $this;
    }

    public function setChildAspectRatio(float $childAspectRatio): self
    {
        $this->childAspectRatio = $childAspectRatio;

        return $this;
    }

    public static function withMaxCrossAxisExtent(
        float $mainAxisSpacing,
        float $crossAxisSpacing,
        float $childAspectRatio
    ): static {
        return (new static(0))
            ->setMainAxisSpacing($mainAxisSpacing)
            ->setCrossAxisSpacing($crossAxisSpacing)
            ->setChildAspectRatio($childAspectRatio);
    }
}
