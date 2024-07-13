<?php

namespace Flutterping\Resources\Library\FlutterSvg\Resources;

use Flutterping\Resources\Core\CoreDouble;
use Flutterping\Resources\Library\FlutterSvg\Definitions\TypeDefinitions;
use Flutterping\Resources\Paintings\Alignment;
use Flutterping\Resources\Paintings\BoxFit;
use Flutterping\Resources\Widgets\Widget;

class SvgPictureAsset extends Widget
{
    protected string $assetName;
    protected CoreDouble $width;
    protected CoreDouble $height;
    protected Alignment $alignment;
    protected BoxFit $fit;
    protected bool $matchTextDirection;
    protected bool $allowDrawingOutsideViewBox;
    protected bool $excludeFromSemantics;

    public function __construct(string $assetName)
    {
        $this->assetName = $assetName;
    }

    public function setAssetName(string $assetName): self
    {
        $this->assetName = $assetName;

        return $this;
    }

    public function setWidth(CoreDouble $width): self
    {
        $this->width = $width;

        return $this;
    }

    public function setHeight(CoreDouble $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function setAlignment(Alignment $alignment): self
    {
        $this->alignment = $alignment;

        return $this;
    }

    public function setFit(BoxFit $fit): self
    {
        $this->fit = $fit;

        return $this;
    }

    public function setMatchTextDirection(bool $matchTextDirection): self
    {
        $this->matchTextDirection = $matchTextDirection;

        return $this;
    }

    public function setAllowDrawingOutsideViewBox(bool $allowDrawingOutsideViewBox): self
    {
        $this->allowDrawingOutsideViewBox = $allowDrawingOutsideViewBox;

        return $this;
    }

    public function setExcludeFromSemantics(bool $excludeFromSemantics): self
    {
        $this->excludeFromSemantics = $excludeFromSemantics;

        return $this;
    }

    public function getType(): string
    {
        return TypeDefinitions::SvgPictureAsset;
    }
}
