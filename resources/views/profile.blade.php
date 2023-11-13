<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Профиль</title>
    <link rel="stylesheet" href="/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-5 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <div class="profile_image mb-3"><img src="/storage/image/default_profile.jpg" alt="default_profile.jpg"></div>
                    <span class="font-weight-bold">Имя</span>
                    <span class="text-black-50">Email</span>
                    <span class="text-black-50">Пароль</span>
                </div>
            </div>
            <div class="col-md-7 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Настройки профиля</h4>
                    </div>
                    <div class="col-md-12 mb-3"><label class="labels">Имя</label><input type="text" class="form-control" placeholder="Введите имя" value=""></div>
                    <div class="col-md-12 mb-3"><label class="labels">Адрес</label><input type="text" class="form-control" placeholder="Введите адрес" value=""></div>
                    <div class="col-md-12 mb-3"><label class="labels">Новый пароль</label><input type="text" class="form-control" placeholder="Введите пароль" value=""></div>
                    <div class="mt-5 text-center">
                        <button class="btn btn-primary profile-button" type="button">Сохранить изменения</button>
                        <a style="text-decoration: none; margin-left: 10px" href="/">Отмена</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>
</html>