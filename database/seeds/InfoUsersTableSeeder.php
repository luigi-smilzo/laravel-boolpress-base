<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\User;
use App\InfoUser;

class InfoUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users = User::all();

        foreach ($users as $user) {
            $newInfo = new InfoUser();

            $newInfo->user_id = $user->id;
            $newInfo->phone = $faker->phoneNumber();
            $newInfo->address = $faker->streetAddress();
            $newInfo->avatar = $faker->imageUrl(250, 250);

            $newInfo->save();
        }
    }
}
