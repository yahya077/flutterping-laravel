<?php

namespace Flutterping\Resources\Widgets;

use Flutterping\Resources\Definitions\ElementDefinitions;
use Flutterping\Resources\Event\ActionEvent;
use Flutterping\Resources\Json;
use Flutterping\Resources\Material\InputDecoration;
use Flutterping\Resources\Validator\Validator;

class RadioGroupFormField extends Widget
{
    protected string $name;

    protected mixed $initialValue;

    protected Widget|Json|null $title;

    protected Widget|Json|null $subtitle;

    protected InputDecoration $decoration;

    protected ActionEvent $onChanged;

    protected Validator $validator;

    protected array $options;

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function setInitialValue(mixed $initialValue): self
    {
        $this->initialValue = $initialValue;

        return $this;
    }

    public function setDecoration(InputDecoration $decoration): self
    {
        $this->decoration = $decoration;

        return $this;
    }

    public function setOnChanged(ActionEvent $onChanged): self
    {
        $this->onChanged = $onChanged;

        return $this;
    }

    public function setValidator(Validator $validator): self
    {
        $this->validator = $validator;

        return $this;
    }

    public function setTitle(Widget|Json $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function setSubtitle(Widget|Json $subtitle): self
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    public function setOptions(array $options): self
    {
        $this->options = $options;

        return $this;
    }

    public function getType(): string
    {
        return ElementDefinitions::RadioGroupFormField;
    }
}
