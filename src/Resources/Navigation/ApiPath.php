<?php

namespace Flutterping\Resources\Navigation;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Element;

class ApiPath extends Path
{
    public function __construct(protected string $path, protected $baseUrl = null)
    {
        parent::__construct($path);
    }

    public function setBaseUrl($baseUrl)
    {
        $this->baseUrl = $baseUrl;
        return $this;
    }

    public function getType(): string
    {
        return ElementDefinitions::ApiPath;
    }
}
