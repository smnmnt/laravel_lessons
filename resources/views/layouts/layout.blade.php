<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/laravel.svg') }}" type="image/x-icon">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="col-6 navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Главная</a>
            </li>
            <li class="nav-item offset-3">
                <a class="nav-link active" aria-current="page" href="{{ route('post.create') }}">Создать пост</a>
            </li>
        </ul>
        <form class="d-flex" role="search" action="{{ route('post.index') }}">
            <input class="form-control me-2" name="search" type="search" placeholder="Найти пост" aria-label="Search">
            <button class="btn btn-outline-success offset-3" type="submit">Поиск</button>
        </form>
    </div>
</nav>
<div class="container">
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    @yield('content')
</div>
<!-- /.container -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
