<?php

namespace Flutterping\Resources\Paintings;

use Flutterping\Resources\Definitions\ElementDefinitions;

class BeveledRectangleBorder extends ShapeBorder
{
    protected BorderSide $side;
    protected BorderRadius $borderRadius;

    public function setSide(BorderSide $side): self
    {
        $this->side = $side;

        return $this;
    }

    public function setBorderRadius(BorderRadius $borderRadius): self
    {
        $this->borderRadius = $borderRadius;

        return $this;
    }

    public function getType(): string
    {
        return ElementDefinitions::BeveledRectangleBorder;
    }
}
