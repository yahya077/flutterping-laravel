<?php

namespace Flutterping\Resources\Contracts;

interface ScopingInterface
{
    public function setScope(string $scope): self;
}
