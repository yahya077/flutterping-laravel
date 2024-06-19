<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Renderings\CrossAxisAlignment;
use Flutterping\Resources\Renderings\MainAxisAlignment;

class Flex extends Widget
{
    public function getType(): string
    {
        return ElementDefinitions::Flex;
    }
    protected MainAxisAlignment $mainAxisAlignment;
    protected CrossAxisAlignment $crossAxisAlignment;
    /**
     * @var array<Widget>
     */
    protected array $children;

    public function setMainAxisAlignment(MainAxisAlignment $mainAxisAlignment): self
    {
        $this->mainAxisAlignment = $mainAxisAlignment;

        return $this;
    }

    public function setCrossAxisAlignment(CrossAxisAlignment $crossAxisAlignment): self
    {
        $this->crossAxisAlignment = $crossAxisAlignment;

        return $this;
    }

    public function setChildren(array $children): self
    {
        $this->children = $children;

        return $this;
    }
}
