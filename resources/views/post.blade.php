@extends('layout')



@section('content')
    <h3>Категория: {{$category->title}}</h3>
    <h5>{{$post->title}}</h5>
    <h6>{{$post->created_at}}</h6>
    <p>{{$post->body}}</p>
    <hr>
    <p>Комментарии:</p>
    @foreach($comments as $comment)
        <b>{{$comment->author}}</b><br>
        <i>{{$comment->body}}</i><br><br>
    @endforeach
    <hr>
    @if($add_comment_notify)
    <div class="alert alert-success" role="alert">
        Ваш комментарий был успешно добавлен!
    </div>
    @endif
    <div class="card">
        <div class="card-header">
           <h4>Добавить комментарий</h4>
        </div>
        <div class="card-body">
            <form class="form" method="post" action="/post/{{$post->id}}/add_comment">
                <div class="form-group">
                    <input class="form-control" name="author" placeholder="Имя автора">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="body" type="text" placeholder="Текст комментария"></textarea><br>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Отправить</button>
                </div>
            </form>
        </div>
    </div>

@endsection
