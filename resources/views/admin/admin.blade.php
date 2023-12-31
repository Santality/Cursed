<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Даб.РУ - Админ</title>
    <link rel="stylesheet" href="/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <style>
        a>img{
            width: 25px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Даб</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="/admin">Панель администратора</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/">Выход</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <main>
        <div class="container">
            <h2 class="m-3">Список заявок</h2>
        <table class="table"> 
            <thead> 
              <tr> 
                <th scope="col">#</th> 
                <th scope="col">Email</th> 
                <th scope="col">Имя клиента</th> 
                <th scope="col">Курс</th>
                <th scope="col">Дата заявки</th>
                <th scope="col">Статус</th> 
              </tr> 
            </thead> 
            <tbody> 
                @foreach ($all_applications as $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th> 
                        <td>{{$item->email}}</td> 
                        <td>{{$item->name}}</td>
                        <td>{{$item->course_id}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>
                            @if($item->is_confirm == 0)
                            Не подтверждена
                            @else
                            Подтверждена
                            @endif
                        </td>
                        <td>
                            @if($item->is_confirm == 0)
                            <a href="/application/{{$item->id}}/confirm">
                                <img src="/images/accec.png" alt="">
                            </a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody> 
          </table>
        </div>
        <section>
            <div class="container">
                <h2 class="m-3">Создание курса</h2>
                <form method="POST" action="/course/create" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Название курса</label>
                        <input type="text" class="form-control" id="title" name="title">
                        @error('title')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Описание курса</label>
                        <textarea class="form-control" id="description" rows="2" name="description"></textarea>
                        @error('description')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="cost" class="form-label">Стоимость курса</label>
                        <input type="text" class="form-control" id="cost" name="cost">
                        @error('cost')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="duration" class="form-label">Длительность курса (в неделях)</label>
                        <input type="number" class="form-control" id="duration" name="duration">
                        @error('duration')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Изображение курса</label>
                        <input type="file" class="form-control" id="image" name="image">
                        @error('image')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Категория курса</label>
                        <select id="category" class="form-select" name="category">
                            @foreach ($categories as $item)
                                <option value="{{$item->id}}">{{$item->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Создать</button>
                </form>
            </div>
        </section>
        <section>
            <div class="container">
                <h2 class="m-3">Создание категории</h2>
                <form method="POST" action="/category/create">
                    @csrf
                    <div class="mb-3">
                        <label for="category_title" class="form-label">Название категории</label>
                        <input id="category_title" type="text" class="form-control" name="title2">
                        @error('title2')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Создать</button>
                </form>
            </div>
        </section>
      </main>
</body>
</html>