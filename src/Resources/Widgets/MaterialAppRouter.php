<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\RouterConfig;
use Flutterping\Resources\UI\Locale;
use Flutterping\Resources\UI\ThemeData;

class MaterialAppRouter extends Widget
{
    protected RouterConfig $routerConfig;

    protected bool $debugShowCheckedModeBanner = false;

    protected ?array $supportedLocales;

    protected bool $showPerformanceOverlay;

    protected bool $checkerboardOffscreenLayers;

    protected bool $checkerboardRasterCacheImages;

    protected Locale $locale;

    protected array $localizationsDelegates;

    protected ThemeData $theme;

    public function setRouterConfig(RouterConfig $routerConfig): self
    {
        $this->routerConfig = $routerConfig;

        return $this;
    }

    public function setDebugShowCheckedModeBanner(bool $debugShowCheckedModeBanner): self
    {
        $this->debugShowCheckedModeBanner = $debugShowCheckedModeBanner;

        return $this;
    }

    public function setSupportedLocales(array $supportedLocales): self
    {
        $this->supportedLocales = $supportedLocales;

        return $this;
    }

    public function setShowPerformanceOverlay(bool $showPerformanceOverlay): self
    {
        $this->showPerformanceOverlay = $showPerformanceOverlay;

        return $this;
    }

    public function setCheckerboardOffscreenLayers(bool $checkerboardOffscreenLayers): self
    {
        $this->checkerboardOffscreenLayers = $checkerboardOffscreenLayers;

        return $this;
    }

    public function setCheckerboardRasterCacheImages(bool $checkerboardRasterCacheImages): self
    {
        $this->checkerboardRasterCacheImages = $checkerboardRasterCacheImages;

        return $this;
    }

    public function setLocale(Locale $locale): self
    {
        $this->locale = $locale;

        return $this;
    }

    public function setLocalizationsDelegates(array $localizationsDelegates): self
    {
        $this->localizationsDelegates = $localizationsDelegates;

        return $this;
    }

    public function setTheme(ThemeData $theme): self
    {
        $this->theme = $theme;

        return $this;
    }

    public function getType(): string
    {
        return ElementDefinitions::MaterialAppRouter;
    }
}
