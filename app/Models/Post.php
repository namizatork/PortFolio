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
    static function getPostData()
    {
        //全データを取得
        $data = Post::get();

        return $data;
    }
}
