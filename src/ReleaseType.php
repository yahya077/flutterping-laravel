<?php

namespace Flutterping;

enum ReleaseType: string
{
    case Published = 'published';

    case Draft = 'draft';

    case Deprecated = 'deprecated';

    case PublishedToStore = 'published_to_store';

    case PublishedToTest = 'published_to_test';
}
