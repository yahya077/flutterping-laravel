<?php

namespace Flutterping\Resources\Material;

use Flutterping\Resources\Core\CoreDouble;
use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Paintings\BorderRadius;

class OutlineInputBorder extends InputBorder
{
    protected BorderRadius $borderRadius;

    protected CoreDouble $gapPadding;

    public function setBorderRadius(BorderRadius $borderRadius): self
    {
        $this->borderRadius = $borderRadius;

        return $this;
    }

    public function setGapPadding(CoreDouble $gapPadding): self
    {
        $this->gapPadding = $gapPadding;

        return $this;
    }

    public function getType(): string
    {
        return ElementDefinitions::OutlineInputBorder;
    }
}
