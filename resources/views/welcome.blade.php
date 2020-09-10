@extends('layout')

@section('content')
    <p>Добро пожаловать, @if($user) {{$user->name}}@else незнакомец@endif! Вы попали в блог. Он был создан в процессе изучения фреймворка Laravel.</p>
@endsection
