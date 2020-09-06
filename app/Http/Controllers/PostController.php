<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function welcome ()
    {
        return view('welcome');
    }

    public function post($id)
    {
        $posts = \DB::table('posts')->where('id', '=', $id)->get()->first();

        return view('post', [
            'post' => $posts
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
