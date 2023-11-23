<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Даб.РУ</title>
    <link rel="stylesheet" href="/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
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
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#about">О нас</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#courses">Курсы</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#category">Категории</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#enroll">Записаться</a>
              </li>
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

      <main>
        <section id="hero" class="hero d-flex justify-content-center align-items-center text-white ">
            <h1 class="bg-dark p-1 opacity-75">Онлайн курсы - это круто!</h1>
        </section>
        <section id="about">
            <div class="container">
              <h2 class="m-3">О нас</h2>
                <div class="row mb-3">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Special title treatment</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Special title treatment</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Special title treatment</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Special title treatment</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </section>
        <section id="courses">
            <div class="container">
              <h2 class="m-3">Курсы</h2>
              <div class="d-flex">
                @foreach ($courses as $item)
                <div class="card" style="width: 18rem;">
                    <img src="storage/image/{{$item->image}}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{$item->title}}</h5>
                    <p class="card-text">{{$item->description}}</p>
                    <p class="card-text">Длительность: {{$item->duration}}</p>
                    <p class="card-text">Цена: {{$item->cost}}</p>
                    <a href="#" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
                @endforeach
              </div>
              {{ $courses->withQueryString()->links('pagination::bootstrap-5') }}
            </div>
        </section>
        <section id="category">
          <div class="container">
            <h2 class="m-3">Категории</h2>
            <div class="d-flex">
              @foreach ($category as $item2)
                <div class="cstm-card">
                  <p>{{$item2->title}}</p>
                  <a href="/category/{{$item2->id}}" class="btn btn-primary">Список</a>
                </div>
              @endforeach
            </div>
            {{ $category->withQueryString()->links('pagination::bootstrap-5') }}
          </div>
      </section>
        <section id="enroll">
            <div class="container">
              <h2 class="m-3">Записаться</h2>
                <form method="POST" action="/enroll">
                  @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Ваш email</label>
                    <input type="email" class="form-control" id="email" name="email">
                    @error('email')
                    <div class="alert alert-danger" role="alert">
                      {{$message}}
                    </div>
                    @enderror
                <div class="mb-3">
                    <label for="name" class="form-label">Ваше имя</label>
                    <input type="text" class="form-control" id="name" name="name">
                    @error('name')
                    <div class="alert alert-danger" role="alert">
                      {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Выберите курс</label>
                    <select class="form-select" name="course">
                        @foreach ($courses as $item)
                          <option value="{{$item->id}}">{{$item->title}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Оставить заявку</button>
            </form>
            </div>
        </section>
    </main>
    
</body>
</html>