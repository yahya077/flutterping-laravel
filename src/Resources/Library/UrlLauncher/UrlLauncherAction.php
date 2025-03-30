<?php

namespace Flutterping\Resources\Library\UrlLauncher;

use Flutterping\Resources\Action\Action;

class UrlLauncherAction extends Action
{
    public function __construct(public string $url)
    {
        parent::__construct();
    }

    public function getActionType(): string
    {
        return 'UrlLauncherAction';
    }
}
