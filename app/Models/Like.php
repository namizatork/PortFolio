<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    //ブログ記事テーブル
    public function posts()
    {
        return $this->belongsTo(Post::class);
    }
}
