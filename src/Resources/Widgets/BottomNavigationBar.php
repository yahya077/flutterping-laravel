<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\AbstractBottomNavigationBar;
use Flutterping\Resources\Contracts\ColorInterface;
use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Event\BaseEvent;
use Flutterping\Resources\Json;
use Flutterping\Resources\Paintings\TextStyle;

class BottomNavigationBar extends AbstractBottomNavigationBar
{
    protected array|BottomNavigationBarItem $items;

    protected Json $currentIndex;

    protected string $stackKey;

    protected array|BaseEvent $onTapEvents;

    protected ?float $elevation;

    protected ?ColorInterface $backgroundColor;

    protected ?int $iconSize;

    protected ?ColorInterface $selectedItemColor;

    protected ?ColorInterface $unselectedItemColor;

    protected ?IconThemeData $selectedIconTheme;

    protected ?IconThemeData $unselectedIconTheme;

    protected ?int $selectedFontSize;

    protected ?int $unselectedFontSize;

    protected ?TextStyle $selectedLabelStyle;

    protected ?TextStyle $unselectedLabelStyle;

    protected ?bool $showSelectedLabels;

    protected ?bool $showUnselectedLabels;

    public function setItems(array|BottomNavigationBarItem $items): self
    {
        $this->items = $items;

        return $this;
    }

    public function setCurrentIndex(Json $currentIndex): self
    {
        $this->currentIndex = $currentIndex;

        return $this;
    }

    public function setElevation(float $elevation): self
    {
        $this->elevation = $elevation;

        return $this;
    }

    public function setBackgroundColor(ColorInterface $backgroundColor): self
    {
        $this->backgroundColor = $backgroundColor;

        return $this;
    }

    public function setIconSize(int $iconSize): self
    {
        $this->iconSize = $iconSize;

        return $this;
    }

    public function setSelectedItemColor(ColorInterface $selectedItemColor): self
    {
        $this->selectedItemColor = $selectedItemColor;

        return $this;
    }

    public function setUnselectedItemColor(ColorInterface $unselectedItemColor): self
    {
        $this->unselectedItemColor = $unselectedItemColor;

        return $this;
    }

    public function setSelectedIconTheme(IconThemeData $selectedIconTheme): self
    {
        $this->selectedIconTheme = $selectedIconTheme;

        return $this;
    }

    public function setUnselectedIconTheme(IconThemeData $unselectedIconTheme): self
    {
        $this->unselectedIconTheme = $unselectedIconTheme;

        return $this;
    }

    public function setSelectedFontSize(int $selectedFontSize): self
    {
        $this->selectedFontSize = $selectedFontSize;

        return $this;
    }

    public function setUnselectedFontSize(int $unselectedFontSize): self
    {
        $this->unselectedFontSize = $unselectedFontSize;

        return $this;
    }

    public function setSelectedLabelStyle($selectedLabelStyle): self
    {
        $this->selectedLabelStyle = $selectedLabelStyle;

        return $this;
    }

    public function setUnselectedLabelStyle($unselectedLabelStyle): self
    {
        $this->unselectedLabelStyle = $unselectedLabelStyle;

        return $this;
    }

    public function setShowSelectedLabels(bool $showSelectedLabels): self
    {
        $this->showSelectedLabels = $showSelectedLabels;

        return $this;
    }

    public function setShowUnselectedLabels(bool $showUnselectedLabels): self
    {
        $this->showUnselectedLabels = $showUnselectedLabels;

        return $this;
    }

    public function setOnTapEvents(array|BaseEvent $onTapEvents): self
    {
        $this->onTapEvents = $onTapEvents;

        return $this;
    }

    public function setStackKey(string $stackKey): self
    {
        $this->stackKey = $stackKey;

        return $this;
    }

    public function getType(): string
    {
        return ElementDefinitions::BottomNavigationBar;
    }
}
