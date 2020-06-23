<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;
use App\Comment;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $posts = Post::all();

        for ($i = 0; $i < 6; $i++)
        {
            $newComment = new Comment();
            
            $newComment->post_id = $posts->random()->id;
            $newComment->author = $faker->name();
            $newComment->content = $faker->text(150);
    
            $newComment->save();
        }
    }
}
