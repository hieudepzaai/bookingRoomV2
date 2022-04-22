<?php

namespace App\Console\Commands;

use App\Models\Post;
use App\Models\PostGallary;
use Illuminate\Console\Command;

class UpdatePostImgCount extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'post:imgcount';

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
               $imgCount = PostGallary::where('post_id' ,$post->id)->count();
               $p = Post::find($post->id)->update([
                   'img_count' => $imgCount
               ]);
                $this->info("Update img count for: {$post->id}  with img count:  $imgCount");


            }
        });
        return 0;
    }
}
