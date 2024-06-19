<?php

namespace Flutterping\FlutterpingLaravel\Commands;

use Illuminate\Console\Command;

class FlutterpingLaravelCommand extends Command
{
    public $signature = 'flutterping-laravel';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
