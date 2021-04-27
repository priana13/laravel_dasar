<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','content','slug','is_published'];

    protected $dates = [
        'publised_at'
    ];


    public function scopePostBulanIni($query)
    {
        return $query->where('created_at','>',date('Y-m-d'));
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
