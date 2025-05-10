<?php

// database/seeders/PostsTableSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Получаем всех пользователей
        $userIDs = DB::table('users')->pluck('id');

        for ($i = 0; $i < 20; $i++) {
            DB::table('posts')->insert([
                'title' => $faker->sentence(6),
                'slug' => Str::slug($faker->sentence(6), '-'),
                'likes' => 0,
                'user_id' => $userIDs->random(), // случайный пользователь
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
