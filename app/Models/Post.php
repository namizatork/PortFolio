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
    static function getPostData(int $num = null)
    {
        $query = Post::with(['tags','category'])->orderBy('id', 'desc');

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
    static function getPostPage(int $num = null)
    {
        $query = Post::with(['tags','category'])->orderBy('id', 'desc');

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
