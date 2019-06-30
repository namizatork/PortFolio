<?php

use Illuminate\Database\Seeder;
use App\Models\Like;

class LikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 9; $i++)
        {
            Like::create([
                'post_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
