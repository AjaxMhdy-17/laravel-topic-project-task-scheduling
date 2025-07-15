<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class ResetDeleteOldPost extends Command
{
    protected $signature = 'reset:deleteold-post';
    protected $description = 'Reset the DeleteoldPost scheduler flag.';

    public function handle()
    {
        Cache::forget('schedule:disable:deleteold-post');
        $this->info('Scheduler flag reset. DeleteoldPost command will run again.');
    }
}
