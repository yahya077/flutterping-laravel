<?php

namespace Flutterping\Resources\Library\Choice\Resources;

use Flutterping\Resources\Library\Choice\Resources\Contracts\ChoiceAnchorInterface;
use Flutterping\Resources\Json;

class ChoiceAnchor extends Json implements ChoiceAnchorInterface
{
    protected Json $title;

    protected Json $leading;

    protected Json $trailing;

    protected bool $dense;

    protected bool $loading;

    protected bool $inline;

    protected int $valueTruncate;

    protected string $placeholder;

    public function setTitle(Json $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function setLeading(Json $leading): self
    {
        $this->leading = $leading;

        return $this;
    }

    public function setTrailing(Json $trailing): self
    {
        $this->trailing = $trailing;

        return $this;
    }

    public function setDense(bool $dense): self
    {
        $this->dense = $dense;

        return $this;
    }

    public function setLoading(bool $loading): self
    {
        $this->loading = $loading;

        return $this;
    }

    public function setInline(bool $inline): self
    {
        $this->inline = $inline;

        return $this;
    }

    public function setValueTruncate(int $valueTruncate): self
    {
        $this->valueTruncate = $valueTruncate;

        return $this;
    }

    public function setPlaceholder(string $placeholder): self
    {
        $this->placeholder = $placeholder;

        return $this;
    }

    public function getType(): string
    {
        return 'ChoiceAnchor';
    }
}