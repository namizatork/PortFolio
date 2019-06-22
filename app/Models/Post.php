<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    //記事データの取得
    static function getPostData(Int $num = null)
    {
        //数字指定があれば引数の数だけ記事データを取得
        if (isset($num)) {
            $data = Post::take($num)->get();
        //数字指定がなければ記事データを全件取得
        } else {
            $data = Post::get();
        }

        return $data;
    }
}
