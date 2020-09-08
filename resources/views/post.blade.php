@extends('layout')



@section('content')
    <h3>Категория: {{$category->title}}</h3>
    <h4>{{$post->title}}</h4>
    <h6>{{$post->created_at}}</h6>
    <p>{{$post->body}}</p>
    <hr>
    <p>Комментарии</p>
    @foreach($comments as $comment)
    {{$comment->author}}<br>
    {{$comment->body}}<br>
    @endforeach
    <hr>
    <p>Новый комментарий:</p>
    <form method="post" action="/post/{{$post->id}}/add_comment">
        <input name="author" placeholder="Имя автора"><br>
        <input name="body" type="text" placeholder="Текст комментария"><br>
        <input type="submit">
    </form>


@endsection
