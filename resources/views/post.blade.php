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


@endsection
