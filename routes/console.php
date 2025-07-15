<?php

use App\Console\Commands\DeleteoldPost;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;
use Illuminate\Support\Facades\Cache;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');


Schedule::command(DeleteoldPost::class)->everyFiveSeconds()->when(fn () => !Cache::get('schedule:disable:deleteold-post', false));