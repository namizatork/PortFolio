<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public $timestamps = false;

    //ブログ記事テーブル
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

    //ポートフォリオテーブル
    public function portfolios()
    {
        return $this->belongsToMany(Portfolio::class);
    }
}
