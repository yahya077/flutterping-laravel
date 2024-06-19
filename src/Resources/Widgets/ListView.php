<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Paintings\Axis;

class ListView extends Widget
{
    public function getType(): string
    {
        return ElementDefinitions::ListView;
    }

    protected Axis $scrollDirection;

    protected bool $reverse;

    protected bool $shrinkWrap;

    protected array|Widget $items;

    public function setScrollDirection(Axis $scrollDirection): ListView
    {
        $this->scrollDirection = $scrollDirection;

        return $this;
    }

    public function setReverse(bool $reverse): ListView
    {
        $this->reverse = $reverse;

        return $this;
    }

    public function setShrinkWrap(bool $shrinkWrap): ListView
    {
        $this->shrinkWrap = $shrinkWrap;

        return $this;
    }

    public function setItems(array|Widget $items): ListView
    {
        $this->items = $items;

        return $this;
    }

    public static function builder(int $itemCount, callable $itemBuilder, $scrollDirection = null, $reverse = null, $shrinkWrap = null): ListView
    {

        $listView = new ListView();
        $listView->setScrollDirection($scrollDirection ?? Axis::vertical());
        $listView->setReverse($reverse ?? false);
        $listView->setShrinkWrap($shrinkWrap ?? false);

        $items = [];

        for ($i = 0; $i < $itemCount; $i++) {
            $items[] = $itemBuilder($i);
        }

        $listView->setItems($items);

        return $listView;
    }
}
