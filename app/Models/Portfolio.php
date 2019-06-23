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
    public function genles()
    {
        return $this->hasMany(Genle::class);
    }

    //タグテーブル
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    //ポートフォリオデータの取得
    static function getPortfolioData()
    {
        //全データを取得
        $data = Portfolio::get();

        return $data;
    }
}
