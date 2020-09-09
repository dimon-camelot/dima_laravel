@extends('layout')

@section('content')
    Cтраница: {{$pageNumber}}
    <hr>
    <ul>
        @foreach($list as $post)
            <li><a href="/post/{{$post->id}}">{{$post->title}}</a></li>
        @endforeach
    </ul>
    <hr>
    @for ($i = 1; $i <= $pagesAmount; $i++)
        <a href="/list/{{ $i }}"><{{ $i }}></a>
    @endfor


@endsection
