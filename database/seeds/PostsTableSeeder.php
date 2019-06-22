<?php

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 4; $i++)
        {
            Post::create([
                'user_id' => 1,
                'category_id' => $i,
                'title' => 'テスト投稿' .$i,
                'text' => 'これはテスト投稿' .$i,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
