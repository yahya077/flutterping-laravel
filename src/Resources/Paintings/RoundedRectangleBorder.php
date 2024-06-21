<?php

namespace Flutterping\Resources\Paintings;

use Flutterping\Resources\Definitions\ElementDefinitions;

class RoundedRectangleBorder extends ShapeBorder
{
    protected BorderRadius $borderRadius;

    public function setBorderRadius(BorderRadius $borderRadius): self
    {
        $this->borderRadius = $borderRadius;

        return $this;
    }

    public function getType(): string
    {
        return ElementDefinitions::RoundedRectangleBorder;
    }
}
