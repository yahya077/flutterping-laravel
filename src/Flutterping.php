<?php

namespace Flutterping;

use Flutterping\Traits\AppInfoTrait;
use Flutterping\Traits\DeviceInfoTrait;
use Flutterping\Traits\LocaleInfoTrait;
use Flutterping\Traits\SystemInfoTrait;

class Flutterping
{
    use AppInfoTrait, DeviceInfoTrait, LocaleInfoTrait, SystemInfoTrait;
}
