<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Contracts\ColorInterface;

class IconThemeData
{
    protected ?float $size;
    protected ?float $fill;
    protected ?float $weight;
    protected ?float $grade;
    protected ?float $opticalSize;
    protected ?ColorInterface $color;
    protected ?float $opacity;

    public function setSize(float $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function setFill(float $fill): self
    {
        $this->fill = $fill;

        return $this;
    }

    public function setWeight(float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function setGrade(float $grade): self
    {
        $this->grade = $grade;

        return $this;
    }

    public function setOpticalSize(float $opticalSize): self
    {
        $this->opticalSize = $opticalSize;

        return $this;
    }

    public function setColor(ColorInterface $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function setOpacity(float $opacity): self
    {
        $this->opacity = $opacity;

        return $this;
    }
}
