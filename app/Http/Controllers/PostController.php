<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function welcome ()
    {
        return view('welcome');
    }

    public function post($id)
    {
        $post = Post::findOrFail($id);
        $category = $post->category;
        $comments = $post->comments;

        return view('post', [
            'post' => $post,
            'category' => $category,
            'comments' => $comments
        ]);
    }

    public function list()
    {
        $list = \DB::table('posts')->get();

        return view('list', [
            'list' => $list
        ]);
    }
}

//class LayoutController extends Controller
//{
//    public function showAll()
//    {
//        $tasks = \DB::table('tasks')->get();
//
//        return view('tasks_all', [
//            'tasks' => $tasks
//        ]);
//
//    }
//
//    public function showSingle ($id)
//    {
//        $task = \DB::table('tasks')
//            ->find($id);
//
//        return view('task_single', [
//            'task' => $task
//        ]);
//
//    }
//}
