<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\User;
use App\Post;


class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users = User::all();

        for ($i = 0; $i < 10; $i++) {
            $title = $faker->text(20);
            $newPost = new Post();

            $newPost->user_id = $users->random()->id;
            $newPost->title = $title;
            $newPost->slug = Str::slug($title, '-');
            $newPost->content = $faker->text(500);

            $newPost->save();
        }
    }
}
