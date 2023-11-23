<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Список курсов</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Даб.РУ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="/auth">Вход</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/reg">Регистрация</a>
                    </li>
                    @endguest
                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="/profile">Профиль</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logout">Выход</a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <a href="/" class="btn btn-primary">Назад</a>
        <h2 class="m-3">Список курсов</h2>
        <table class="table">
            <thead>
                <tr>
                    <th></th>
                    <th>Название</th>
                    <th>Цена</th>
                    <th>Продолжительность (в неделях)</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($games->courses as $game)
                <tr>
                    <td><img src="/storage/image/{{$game->image}}" alt="{{$game->image}}"></th>
                    <td>{{$game->title}}</td>
                    <td>{{$game->cost}}</td>
                    <td>{{$game->duration}}</td>
                    <td><a href="#" class="btn btn-primary">Подробнее</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>