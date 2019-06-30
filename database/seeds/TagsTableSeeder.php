<?php

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagsTableSeeder extends Seeder

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
            Tag::create([
                'name' => 'テストタグ'. $i,
            ]);
        }
    }
}
