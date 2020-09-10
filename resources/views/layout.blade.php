<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Dima's Blog</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-primary">
                    <h1><a href="/">Dima's Blog</a></h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-secondary">
                    @auth<a href="/mylogout">Выход</a>@else<a href="/login">Вход</a> / <a href="/register">Регистрация</a>@endauth
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="alert alert-secondary" style="height: 98%">
                    @yield('content')
                </div>
            </div>
            <div class="col-md-4">
                <div class="alert alert-secondary" style="height: 98%">
                    <h3>Свежие посты</h3>
                    <ul>
                        @foreach($posts as $post)
                            <li><a href="{{ route('show_post', ['id' => $post->id]) }}">{{$post->title}}</a></li>
                        @endforeach
                    </ul>
                    <h6><a href="{{ route('show_list', ['pageNumber' => 1]) }}">Все посты</a></h6>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-primary">
                    Copyright 2020 <a href="/">Dima's Blog</a>. Все права защищены.
                </div>
            </div>
        </div>
    </div>


</body>
</html>
