<?php

namespace Flutterping\Resources\Library\SignInWithApple;

use Flutterping\Resources\Core\CoreDouble;
use Flutterping\Resources\Event\BaseEvent;
use Flutterping\Resources\Paintings\BorderRadius;
use Flutterping\Resources\Widgets\Widget;

class SignInWithAppleButton extends Widget
{
    protected string $clientId;

    protected string $redirectUri;
    protected string $text;

    protected CoreDouble $height;

    /*
     * - black: ![Black Button](https://raw.githubusercontent.com/aboutyou/dart_packages/master/packages/sign_in_with_apple/test/sign_in_with_apple_button/goldens/black_button.png)
     * - white: ![White Button](https://raw.githubusercontent.com/aboutyou/dart_packages/master/packages/sign_in_with_apple/test/sign_in_with_apple_button/goldens/white_button.png)
     * - whiteOutline: ![White Outline Button](https://raw.githubusercontent.com/aboutyou/dart_packages/master/packages/sign_in_with_apple/test/sign_in_with_apple_button/goldens/white_outlined_button.png)
     */
    protected string $style;

    protected BorderRadius $borderRadius;

    /*
     * - left: ![Left Icon Alignment](https://raw.githubusercontent.com/aboutyou/dart_packages/master/packages/sign_in_with_apple/test/sign_in_with_apple_button/goldens/left_aligned_icon.png)
     * - center: ![Center Icon Alignment](https://raw.githubusercontent.com/aboutyou/dart_packages/master/packages/sign_in_with_apple/test/sign_in_with_apple_button/goldens/center_aligned_icon.png)
     */
    protected string $iconAlignment;

    protected BaseEvent $onPressed;

    public function setClientId(string $clientId): self
    {
        $this->clientId = $clientId;

        return $this;
    }

    public function setRedirectUri(string $redirectUri): self
    {
        $this->redirectUri = $redirectUri;

        return $this;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function setHeight(CoreDouble $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function setStyle(string $style): self
    {
        $this->style = $style;

        return $this;
    }

    public function setBorderRadius(BorderRadius $borderRadius): self
    {
        $this->borderRadius = $borderRadius;

        return $this;
    }

    public function setIconAlignment(string $iconAlignment): self
    {
        $this->iconAlignment = $iconAlignment;

        return $this;
    }

    public function setOnPressed(BaseEvent $onPressed): self
    {
        $this->onPressed = $onPressed;

        return $this;
    }

    public function getType(): string
    {
        return 'SignInWithAppleButton';
    }
}
