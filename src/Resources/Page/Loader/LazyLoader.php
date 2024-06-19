<?php

namespace Flutterping\Resources\Page\Loader;

use Flutterping\Resources\Widgets\Widget;

class LazyLoader extends PageLoader
{
    protected String $url;

    protected ?Widget $loaderWidget;
}
