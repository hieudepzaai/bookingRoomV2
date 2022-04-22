<?php

namespace App\Console\Commands;

use App\Models\Post;
use App\Models\PostGallary;
use Illuminate\Console\Command;

class SeedPostImg extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'post:seedimg';

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
                $rand_num = rand(1,10);
                for ($i = 0 ; $i < $rand_num ;$i ++) {
                    $img = PostGallary::create([
                        'img' => 'https://api.lorem.space/image/house?w=600&h=400&ver='.$i,
                        'post_id' => $post->id,
                        'gallary_type' => 'img',
                        'gallary_order' => 0
                ]);
                    $this->info("Create Gallary for post: {$post->id}  ! $img->img");
                }

            }
        });
        return 0;
    }
}
