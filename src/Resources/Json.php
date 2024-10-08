<?php

namespace Flutterping\Resources;

use Flutterping\Resources\Contracts\JsonInterface;

abstract class Json extends Renderable implements JsonInterface
{
    abstract public function getType(): string;

    public function toArray(): ?array
    {
        $objectVars = parent::toArray();

        $array = [];

        $array['type'] = $this->getType();

        foreach ($objectVars as $key => $value) {
            if ($value instanceof Json) {
                $array['data'][$key] = $value->toArray();
            } elseif (is_array($value)) {
                $array['data'][$key] = array_map(function ($element) {
                    return $element instanceof Json ? $element->toArray() : $element;
                }, $value);
            } else {
                $array['data'][$key] = $value;
            }
        }

        return $array;
    }
}
