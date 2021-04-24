<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','content'];

    protected $dates = [
        'publised_at'
    ];


    public function scopePostBulanIni($query)
    {
        return $query->where('created_at','>',date('Y-m-d'));
    }
}
