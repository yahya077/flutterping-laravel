<?php

namespace Flutterping\Resources;

class NotifierVariableValue extends Renderable
{
    public function __construct(protected string $notifierId, protected string $key) {}
}
