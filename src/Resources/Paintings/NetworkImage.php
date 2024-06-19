<?php

namespace Flutterping\Resources\Paintings;

use Flutterping\Resources\Contracts\ImageInterface;
use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Element;

class NetworkImage extends Element implements ImageInterface
{
    public function getType(): string
    {
        return ElementDefinitions::NetworkImage;
    }

    public function __construct(protected string $url) {}
}
