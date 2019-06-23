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
        for ($i = 1; $i < 4; $i++)
        {
            Portfolio::create([
                'user_id' => 1,
                'genle_id' => $i,
                'image' => '/images/upload/test' .$i .'.jpg',
                'name' => 'プロジェクト' .$i,
                'text' => 'これはテストプロジェクトの内容' .$i,
                'people' =>  '1',
                'url' =>  'http://namizatop.sakura.ne.jp/index.html',
                'git_url' =>  'https://github.com/namizatork',
                'from' => date('2018-07-01 00:00:00'),
                'until' => date('2018-08-01 00:00:00')
            ]);
        }
    }
}