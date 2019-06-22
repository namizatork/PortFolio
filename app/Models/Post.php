<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //ユーザーテーブル
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    //ブログカテゴリテーブル
    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    //タグテーブル
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    //記事データの取得
    static function getPostData(Int $num = null)
    {
        //数字指定がある場合の処理
        if (isset($num)) {
            //指定分のデータを取得
            $data = Post::take($num)->get();
        } else {
            //全データを取得
            $data = Post::get();
        }

        return $data;
    }
}
