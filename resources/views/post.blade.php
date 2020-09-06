@extends('layout')



@section('content')
    <h4>{{$post->title}}</h4>
    <h6>{{$post->date}}</h6>
    <p>{{$post->body}}</p>
@endsection
