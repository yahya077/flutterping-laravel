<?php

namespace Flutterping\Resources\Library\UrlLauncher;

use Flutterping\Resources\Action\Action;

class UrlLauncherAction extends Action
{
    /*
     * The URL to be launched.
     * This can be a web URL or a custom URL scheme.
     *
     * - platformDefault: Leaves the decision of how to launch the URL to the platform implementation.
     * - inAppWebView: Loads the URL in an in-app web view (e.g., Android WebView).
     * - inAppBrowserView: Loads the URL in an in-app web view (e.g., Android Custom Tabs, SFSafariViewController).
     * - externalApplication: Passes the URL to the OS to be handled by another application.
     * - externalNonBrowserApplication: Passes the URL to the OS to be handled by another non-browser application.
     */
    protected string $mode;

    public function __construct(public string $url)
    {
        parent::__construct();
    }

    public function setMode(string $mode): self
    {
        $this->mode = $mode;

        return $this;
    }

    public function getActionType(): string
    {
        return 'UrlLauncherAction';
    }
}
