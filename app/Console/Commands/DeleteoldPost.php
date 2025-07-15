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
        $post = Blog::latest('id')->first();

        if (!$post) {
            $this->info('No more posts to delete. Disabling future runs...');
            Cache::forever('schedule:disable:deleteold-post', true); 
            return Command::SUCCESS;
        }

        $post->delete();
        $this->info("Deleted post ID: {$post->id}");

        return Command::SUCCESS;
    }
}
