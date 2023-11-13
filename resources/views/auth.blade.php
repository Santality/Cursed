<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
    <link rel="stylesheet" href="/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
    <div class="block-reg-auth">
        @if(session("error"))
            {{session("error")}}
        @endif
        <h2 class="title-reg-auth">Авторизация</h2>
        <form class="row g-3" method="POST" action="/login-valid">
            @csrf
            <div class="col-md-12">
                <label for="inputEmail" class="form-label">Эл. адрес</label>
                <input type="email" class="form-control" id="email" name="email">
                @error('email')
                    <div class="alert alert-danger" role="alert">{{$message}}</div>
                @enderror
            </div>
            <div class="col-md-12">
                <label for="inputPassword" class="form-label">Пароль</label>
                <input type="password" class="form-control" id="pass" name="pass">
                @error('pass')
                    <div class="alert alert-danger" role="alert">{{$message}}</div>
                @enderror
            </div>
            <div class="col-12">
            <button type="submit" class="btn btn-primary">Войти в систему</button>
            <a style="text-decoration: none; margin-left: 10px" href="/">Вернуться</a>
            </div>
        </form>
    </div>
</body>
</html>