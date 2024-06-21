<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Foundation\ScrollController;
use Flutterping\Resources\Paintings\Axis;
use Flutterping\Resources\Renderings\SliverGridDelegate;

class GridView extends Widget
{
    public function getType(): string
    {
        return ElementDefinitions::GridView;
    }

    protected Axis $scrollDirection;

    protected bool $reverse;

    protected bool $shrinkWrap;

    protected SliverGridDelegate $gridDelegate;

    protected array|Widget $items;

    protected ?ScrollController $controller;

    public function setScrollDirection(Axis $scrollDirection): GridView
    {
        $this->scrollDirection = $scrollDirection;

        return $this;
    }

    public function setReverse(bool $reverse): GridView
    {
        $this->reverse = $reverse;

        return $this;
    }

    public function setShrinkWrap(bool $shrinkWrap): GridView
    {
        $this->shrinkWrap = $shrinkWrap;

        return $this;
    }

    public function setGridDelegate(SliverGridDelegate $gridDelegate): GridView
    {
        $this->gridDelegate = $gridDelegate;

        return $this;
    }

    public function setItems(array|Widget $items): GridView
    {
        $this->items = $items;

        return $this;
    }

    public function setController(?ScrollController $controller): GridView
    {
        $this->controller = $controller;

        return $this;
    }

    public static function builder(int $itemCount, SliverGridDelegate $gridDelegate, callable $itemBuilder, $scrollController = null, $scrollDirection = null, $reverse = null, $shrinkWrap = null): GridView
    {

        $gridView = new GridView();
        $gridView->setScrollDirection($scrollDirection ?? Axis::vertical());
        $gridView->setReverse($reverse ?? false);
        $gridView->setShrinkWrap($shrinkWrap ?? false);
        $gridView->setGridDelegate($gridDelegate);
        $gridView->setController($scrollController);

        $items = [];

        for ($i = 0; $i < $itemCount; $i++) {
            $items[] = $itemBuilder($i);
        }

        $gridView->setItems($items);

        return $gridView;
    }
}
