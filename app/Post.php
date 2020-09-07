<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $primaryKey = 'id';

    public function category() {
        return $this->belongsTo("App\Category", 'category_id', 'id');
    }

    public function comments() {
        return $this->hasMany('App\Comment', 'post_id');
    }
}
