<?php

namespace Flutterping\Resources\Library\CarouselSlider\Resources;

use Flutterping\Resources\Animation\Curves;
use Flutterping\Resources\Renderable;

class CarouselSliderOption extends Renderable
{
    protected float $height;

    protected float $aspectRatio;

    protected float $viewportFraction;

    protected int $initialPage;

    protected bool $enableInfiniteScroll;

    protected bool $animateToClosest;

    protected bool $reverse;

    protected bool $autoPlay;

    protected int $autoPlayInterval;

    protected int $autoPlayAnimationDuration;

    protected Curves $autoPlayCurve;

    protected string $onChangeControllerId;

    public function setHeight(float $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function setAspectRatio(float $aspectRatio): self
    {
        $this->aspectRatio = $aspectRatio;

        return $this;
    }

    public function setViewportFraction(float $viewportFraction): self
    {
        $this->viewportFraction = $viewportFraction;

        return $this;
    }

    public function setInitialPage(int $initialPage): self
    {
        $this->initialPage = $initialPage;

        return $this;
    }

    public function setEnableInfiniteScroll(bool $enableInfiniteScroll): self
    {
        $this->enableInfiniteScroll = $enableInfiniteScroll;

        return $this;
    }

    public function setAnimateToClosest(bool $animateToClosest): self
    {
        $this->animateToClosest = $animateToClosest;

        return $this;
    }

    public function setReverse(bool $reverse): self
    {
        $this->reverse = $reverse;

        return $this;
    }

    public function setAutoPlay(bool $autoPlay): self
    {
        $this->autoPlay = $autoPlay;

        return $this;
    }

    public function setAutoPlayInterval(int $autoPlayInterval): self
    {
        $this->autoPlayInterval = $autoPlayInterval;

        return $this;
    }

    public function setAutoPlayAnimationDuration(int $autoPlayAnimationDuration): self
    {
        $this->autoPlayAnimationDuration = $autoPlayAnimationDuration;

        return $this;
    }

    public function setAutoPlayCurve(Curves $autoPlayCurve): self
    {
        $this->autoPlayCurve = $autoPlayCurve;

        return $this;
    }

    public function setOnChangeControllerId(string $onChangeControllerId): self
    {
        $this->onChangeControllerId = $onChangeControllerId;

        return $this;
    }
}
