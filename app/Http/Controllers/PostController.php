<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function welcome ()
    {
        return view('welcome');
    }

    public function post($id)
    {
        $post = Post::query()->find($id);

        if (is_null($post)) {
            abort(404);
        }

        $category = $post->myCategory;
        $comments = $post->myComments;

        return view('post')
            ->with('post', $post)
            ->with('category', $category)
            ->with('comments', $comments);
    }

    public function list()
    {
        $list = Post::query()->get();

        return view('list', [
            'list' => $list
        ]);
    }
}
