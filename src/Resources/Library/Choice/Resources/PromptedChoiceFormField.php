<?php

namespace Flutterping\Resources\Library\Choice\Resources;

use Flutterping\Resources\Event\ActionEvent;
use Flutterping\Resources\Json;
use Flutterping\Resources\Library\Choice\Resources\Contracts\ChoiceAnchorInterface;
use Flutterping\Resources\Library\Choice\Resources\Contracts\ChoicePromptDelegateInterface;
use Flutterping\Resources\Material\InputDecoration;
use Flutterping\Resources\Validator\Validator;
use Flutterping\Resources\Widgets\Widget;

class PromptedChoiceFormField extends Widget
{
    protected string $title;

    protected string $name;

    protected mixed $initialValue;

    protected InputDecoration $decoration;

    protected ActionEvent $onChanged;

    protected Validator $validator;

    protected int $itemCount;

    protected array $options;

    protected bool $multiple;

    protected bool $clearable;

    protected bool $loading;

    protected bool $error;

    protected Json $buildableItem;

    protected ChoiceAnchorInterface $anchorBuilder;

    protected ChoicePromptDelegateInterface $promptDelegate;

    public function getType(): string
    {
        return 'PromptedChoiceFormField';
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

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

    public function setItemCount(int $itemCount): self
    {
        $this->itemCount = $itemCount;

        return $this;
    }

    public function setOptions(array $options): self
    {
        $this->options = $options;

        return $this;
    }

    public function setMultiple(bool $multiple): self
    {
        $this->multiple = $multiple;

        return $this;
    }

    public function setClearable(bool $clearable): self
    {
        $this->clearable = $clearable;

        return $this;
    }

    public function setLoading(bool $loading): self
    {
        $this->loading = $loading;

        return $this;
    }

    public function setError(bool $error): self
    {
        $this->error = $error;

        return $this;
    }

    public function setBuildableItem(Json $buildableItem): self
    {
        $this->buildableItem = $buildableItem;

        return $this;
    }

    public function setValidator(Validator $validator): self
    {
        $this->validator = $validator;

        return $this;
    }

    public function setAnchorBuilder(ChoiceAnchorInterface $anchorBuilder): self
    {
        $this->anchorBuilder = $anchorBuilder;

        return $this;
    }

    public function setPromptDelegate(ChoicePromptDelegateInterface $promptDelegate): self
    {
        $this->promptDelegate = $promptDelegate;

        return $this;
    }
}
