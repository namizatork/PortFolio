<?php

use Illuminate\Database\Seeder;
use App\Models\Genle;

class GenlesTableSeeder extends Seeder
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
            Genle::create([
                'name' => 'テストジャンル' .$i
            ]);
        }
    }
}
