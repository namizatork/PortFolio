<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{

    //ユーザーテーブル
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    //案件ジャンルテーブル
    public function genle()
    {
        return $this->belongsTo(Genle::class);
    }

    //タグテーブル
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    //ポートフォリオデータの取得
    static function getPortfolioData(int $num = null)
    {
        if (isset($num)) {
            //ジャンルテーブルと結合したデータを全件取得
            $data = Portfolio::with(['tags', 'genle'])->orderBy('id', 'asc')->take($num)->get();
        } else {
            //ジャンルテーブルと結合したデータを全件取得
            $data = Portfolio::with(['tags', 'genle'])->orderBy('id', 'asc')->get();
        }

        return $data;
    }
}
