<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Contracts\ColorInterface;
use Flutterping\Resources\Core\CoreDouble;
use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Paintings\Alignment;
use Flutterping\Resources\Paintings\BoxFit;
use Flutterping\Resources\Paintings\FilterQuality;
use Flutterping\Resources\Paintings\Repeat;

class ImageNetwork extends Widget
{
    protected string $url;

    protected float|CoreDouble $width;

    protected float|CoreDouble $height;

    protected BoxFit $fit;

    protected Alignment $alignment;

    protected Repeat $repeat;

    protected string $semanticLabel;

    protected bool $excludeFromSemantics;

    protected FilterQuality $filterQuality;

    // protected $loadingBuilder; TODO: Implement this
    // protected $errorBuilder; TODO: Implement this
    // protected $frameBuilder; TODO: Implement this
    protected int $cacheWidth;

    protected int $cacheHeight;

    protected ColorInterface $color;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function setWidth(float|CoreDouble $width): ImageNetwork
    {
        $this->width = $width;

        return $this;
    }

    public function setHeight(float|CoreDouble $height): ImageNetwork
    {
        $this->height = $height;

        return $this;
    }

    public function setFit(BoxFit $fit): ImageNetwork
    {
        $this->fit = $fit;

        return $this;
    }

    public function setAlignment(Alignment $alignment): ImageNetwork
    {
        $this->alignment = $alignment;

        return $this;
    }

    public function setRepeat(Repeat $repeat): ImageNetwork
    {
        $this->repeat = $repeat;

        return $this;
    }

    public function setSemanticLabel(string $semanticLabel): ImageNetwork
    {
        $this->semanticLabel = $semanticLabel;

        return $this;
    }

    public function setExcludeFromSemantics(bool $excludeFromSemantics): ImageNetwork
    {
        $this->excludeFromSemantics = $excludeFromSemantics;

        return $this;
    }

    public function setFilterQuality(FilterQuality $filterQuality): ImageNetwork
    {
        $this->filterQuality = $filterQuality;

        return $this;
    }

    public function setCacheWidth(int $cacheWidth): ImageNetwork
    {
        $this->cacheWidth = $cacheWidth;

        return $this;
    }

    public function setCacheHeight(int $cacheHeight): ImageNetwork
    {
        $this->cacheHeight = $cacheHeight;

        return $this;
    }

    public function setColor(ColorInterface $color): ImageNetwork
    {
        $this->color = $color;

        return $this;
    }

    public function getType(): string
    {
        return ElementDefinitions::ImageNetwork;
    }
}
