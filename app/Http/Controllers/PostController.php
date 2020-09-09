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
        $newPostNotify = session()->get('add_comment_notify', false);

        $post = Post::query()->find($id);

        if (is_null($post)) {
            abort(404);
        }

        $category = $post->myCategory;
        $comments = $post->myComments;

        return view('post')
            ->with('post', $post)
            ->with('category', $category)
            ->with('comments', $comments)
            ->with('add_comment_notify', $newPostNotify);
    }

    public function list($pageNumber = 1)
    {

        $postsPerPage = 5; //Количество постов на странице
        $postsAmount = Post::query()->count(); //Количество постов в базе
        $pagesAmount = (int)ceil($postsAmount / $postsPerPage); //Необходимое количество страниц

        if($pageNumber > $pagesAmount) {
            abort(404);
        }

        $list = Post::query()
            ->offset($pageNumber * $postsPerPage - $postsPerPage)
            ->limit($postsPerPage)
            ->get();//Посты выбранной страницы

        return view('list')
            ->with('list', $list)
            ->with('pagesAmount', $pagesAmount)
            ->with('pageNumber', $pageNumber);
    }

    public function add_comment (Request $request, $id)
    {
       $comment = new Comment();
       $comment->post_id = $id;
       $comment->author = $request->get('author');
       $comment->body = $request->get('body');
       $comment->save();

       $session = session();
       $session->flash('add_comment_notify', true);

       return redirect("/post/$id");
    }
}
