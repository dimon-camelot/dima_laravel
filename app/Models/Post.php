<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $primaryKey = 'id';

    public function myCategory () {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }

    public function myComments () {
        return $this->hasMany(Comment::class, 'post_id');
    }
}
