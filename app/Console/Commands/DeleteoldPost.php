<?php

namespace App\Console\Commands;

use App\Models\Blog;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class DeleteoldPost extends Command
{
    protected $signature = 'app:deleteold-post';
    protected $description = 'Deletes latest blog post. Stops when table is empty.';

    public function handle()
    {

        // if (Cache::get('schedule:disable:deleteold-post')) {
        //     $this->info('Resetting disable flag...');
        //     Cache::forget('schedule:disable:deleteold-post');
        // }

        $post = Blog::latest('id')->first();

        if (!$post) {
            $this->warn('No more posts to delete. Disabling future runs...');
            Cache::forever('schedule:disable:deleteold-post', true);
            return Command::SUCCESS;
        }

        $post->delete();
        $this->info("Deleted post ID: {$post->id}");

        return Command::SUCCESS;
    }
}
