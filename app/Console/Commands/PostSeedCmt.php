<?php

namespace App\Console\Commands;

use App\Models\Post;
use App\Models\PostComment;
use App\Models\PostGallary;
use App\Models\User;
use Faker\Factory;
use Illuminate\Console\Command;

class PostSeedCmt extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'post:seedcmt';

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
        $faker   = Factory::create();
        Post::chunk(100 , function ($posts) use ($faker) {
            foreach ($posts as $post) {
                $rand_num = rand(1,10);
                for ($i = 0 ; $i < $rand_num ;$i ++) {
                    $comment = PostComment::create([
                        'content' => $faker->text(100),
                        'post_id' => $post->id,
                        'created_by' => User::inRandomOrder()->limit(1)->first()->id,

                    ]);
                    $this->info("Seeding comment for post  for post: {$post->id}  ! $comment->content");
                }

            }
        });
        return 0;
    }
}
