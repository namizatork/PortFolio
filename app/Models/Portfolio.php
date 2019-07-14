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

    //記事データの取得
    static function getPortfolioData(int $num = null)
    {
        $query = Portfolio::with(['tags','genle'])->orderBy('id', 'desc');

        if (isset($num)) {
            //タグテーブルとカテゴリテーブルと結合したデータを全件取得
            $data = $query->take($num)->get();
        } else {
            //タグテーブルとカテゴリテーブルと結合したデータを全件取得
            $data = $query->get();
        }

        return $data;
    }

    //記事データの取得
    static function getPortfolioPage(int $num = null)
    {
        $query = Portfolio::with(['tags','genle'])->orderBy('id', 'asc');

        if (isset($num)) {
            //タグテーブルとカテゴリテーブルと結合したデータを全件取得
            $data = $query->paginate($num);
        } else {
            //タグテーブルとカテゴリテーブルと結合したデータを全件取得
            $data = $query->paginate();
        }

        return $data;
    }
}
