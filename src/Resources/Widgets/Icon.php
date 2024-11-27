<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Core\CoreDouble;
use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Paintings\TextStyle;
use Flutterping\Resources\UI\Color;
use Flutterping\Resources\UI\TextDirection;

class Icon extends Widget
{
    protected IconData $icon;

    protected CoreDouble $size;
    protected CoreDouble $fill;
    protected CoreDouble $grade;
    protected CoreDouble $opticalSize;
    protected CoreDouble $applyTextScaling;
    protected CoreDouble $weight;
    protected Color $color;
    protected string $semanticLabel;
    protected TextDirection $textDirection;

    public function __construct(IconData $icon)
    {
        $this->icon = $icon;
    }

    public function setSize(CoreDouble $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function setFill(CoreDouble $fill): self
    {
        $this->fill = $fill;

        return $this;
    }

    public function setGrade(CoreDouble $grade): self
    {
        $this->grade = $grade;

        return $this;
    }

    public function setOpticalSize(CoreDouble $opticalSize): self
    {
        $this->opticalSize = $opticalSize;

        return $this;
    }

    public function setApplyTextScaling(CoreDouble $applyTextScaling): self
    {
        $this->applyTextScaling = $applyTextScaling;

        return $this;
    }

    public function setWeight(CoreDouble $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function setColor(Color $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function setSemanticLabel(string $semanticLabel): self
    {
        $this->semanticLabel = $semanticLabel;

        return $this;
    }

    public function setTextDirection(TextDirection $textDirection): self
    {
        $this->textDirection = $textDirection;

        return $this;
    }

    public function getType(): string
    {
        return ElementDefinitions::Icon;
    }
}
