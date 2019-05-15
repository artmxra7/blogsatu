<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class PostsTableSeeder extends Seeder
{

    public function run()
    {
        //
        DB::table('posts')->truncate();

        $posts = [];
        $faker = Factory::create();

        for($i = 1 ; $i <= 10; $i++ ){
            $image = "Post_Image_" . rand(1, 5) . ".jpg";
            $date = date("Y-m-d H:i:s", strtotime("2018-01-02 08::00:00 +{+1}days"));

            $posts[]=[
                'author_id' => rand(1, 3),
                'title' => $faker->sentence(rand(8 , 12)),
                'excerpt' => $faker->text(rand(250, 300)),
                'body' => $faker->paragraph(rand(10, 15), true),
                'slug' => $faker->slug(),
                'image' => rand(0 , 1),
            ];
        }

        DB::table('posts')->insert($posts);
    }
}
