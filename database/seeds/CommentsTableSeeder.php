<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(range(1,30) as $k => $v){
            $post_id =random_int(1,30);
            DB::table('comments')->insert([
                'reply' => 'Reply to post id: '.$post_id."\n".Str::random(50),
                'post_id' => $post_id,
            ]);
        }
    }
}
