@extends('layout')

@section('content')
    <ul>
        @foreach($list as $post)
            <li><a href="post{{$post->id}}">{{$post->title}}</a></li>
        @endforeach
    </ul>
@endsection
