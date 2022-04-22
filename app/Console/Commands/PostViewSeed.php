<?php

namespace App\Console\Commands;

use App\Models\Post;
use App\Models\PostGallary;
use Illuminate\Console\Command;

class PostViewSeed extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'post:viewcount';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Post::chunk(100 , function ($posts){
            foreach ($posts as $post) {
                $rand_num = rand(1,1000);
                $p = Post::find($post->id)->update([
                    'view_count' => $rand_num,
                ]);
                $this->info("Update post {$post->id} with view count : $rand_num");
            }
        });
        return 0;
    }
}
