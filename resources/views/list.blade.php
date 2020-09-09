@extends('layout')

@section('content')
    Cписок постов:
    <hr>
    <ul>
        @foreach($list as $post)
            <li><a href="/post/{{$post->id}}">{{$post->title}}</a></li>
        @endforeach
    </ul>
    <hr>
    @for ($i = 1; $i <= $pagesAmount; $i++)
        @if($i == $pageNumber)
            <b><a href="/list/{{ $i }}"><{{ $i }}></a></b>
        @else
            <a href="/list/{{ $i }}"><{{ $i }}></a>
        @endif
    @endfor


@endsection
