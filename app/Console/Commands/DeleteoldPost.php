<?php

namespace App\Console\Commands;

use App\Models\Blog;
use Illuminate\Console\Command;

class DeleteoldPost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:deleteold-post';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $post = Blog::orderBy('id','desc')->first();
        $post->delete() ;
    }
}
