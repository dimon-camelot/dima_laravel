<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function show() {
        $post = Post::find(1);

        dd($post->comments);
    }
}
