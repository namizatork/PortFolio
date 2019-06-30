<?php

use Illuminate\Database\Seeder;
use App\Models\Portfolio;

class PortfoliosTableSeeder extends Seeder
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
            Portfolio::create([
                'user_id' => 1,
                'genle_id' => $i,
                'src' => '/images/upload/portfolio' .$i .'.png',
                'name' => 'プロジェクト' .$i,
                'text' => 'これはテストプロジェクトの内容' .$i,
                'people' => random_int(1,3),
                'url' =>  'http://namizatop.sakura.ne.jp/index.html',
                'git_url' =>  'https://github.com/namizatork',
                'from' => date('2018-07-01 00:00:00'),
                'until' => date('2018-08-01 00:00:00'),
                'private_flg' => random_int(0,1),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}