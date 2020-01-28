<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(range(1,30) as $k => $v){
            $author_id = random_int(1,10);
            DB::table('posts')->insert([
                'title' => "Author id: {$author_id} ". Str::random(10),
                'content' => "content of author: {$author_id} ".Str::random(50),
                'author_id' => $author_id,
            ]);
        }
    }
}
