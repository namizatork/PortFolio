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
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //ブログイイネテーブル
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    //タグテーブル
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    //記事データの取得
    static function getPostData()
    {
        //カテゴリテーブルと結合したデータを全件取得
        $data = Post::with('category')->orderBy('id', 'desc')->get();

        return $data;
    }
}
