<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'category_id' => rand(1, 4),
            'title' => str_random(10),
            'body' => str_random(50)

        ]);
        //
    }
}
