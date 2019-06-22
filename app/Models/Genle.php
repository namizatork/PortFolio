<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genle extends Model
{
    public $timestamps = false;

    //ポートフォリオテーブル
    public function portfolios()
    {
        return $this->belongsTo(Portfolio::class);
    }
}
