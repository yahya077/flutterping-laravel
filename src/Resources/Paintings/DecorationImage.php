<?php

namespace Flutterping\Resources\Paintings;

use Flutterping\Resources\Contracts\ImageInterface;
use Flutterping\Resources\Definitions\ElementDefinitions;

class DecorationImage
{
    public function getType(): string
    {
        return ElementDefinitions::DecorationImage;
    }
    protected ImageInterface $image;
    protected BoxFit $fit;
    protected float $opacity;

    public function setImage(ImageInterface $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function setFit(BoxFit $fit): self
    {
        $this->fit = $fit;

        return $this;
    }

    public function setOpacity(float $opacity): self
    {
        $this->opacity = $opacity;

        return $this;
    }
}
