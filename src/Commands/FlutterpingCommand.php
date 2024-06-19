<?php

namespace Flutterping\Commands;

use Illuminate\Console\Command;

class FlutterpingCommand extends Command
{
    public $signature = 'flutterping-laravel';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
