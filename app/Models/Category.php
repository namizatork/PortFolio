<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;

    //ブログ記事テーブル
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
