<?php

namespace Flutterping\Resources;

use Flutterping\Resources\Contracts\ElementInterface;

abstract class Element extends Renderable implements ElementInterface
{
    abstract public function getType(): string;

    public function toArray(): ?array
    {
        $objectVars = parent::toArray();

        $array = [];

        $array['type'] = $this->getType();

        foreach ($objectVars as $key => $value) {
            if ($value instanceof Element) {
                $array['data'][$key] = $value->toArray();
            } elseif (is_array($value)) {
                $array['data'][$key] = array_map(function ($element) {
                    return $element instanceof Element ? $element->toArray() : $element;
                }, $value);
            } else {
                $array['data'][$key] = $value;
            }
        }

        return $array;
    }
}
