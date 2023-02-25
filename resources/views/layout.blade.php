<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="/" class="navbar-brand d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
                    <strong>Banzai</strong>
                </a>
                <a href="/auth" class="btn btn-primary my-2">Войти</a>
                <a href="/reg" class="btn btn-secondary my-2">Зарегистрироваться</a>
                <a href="/my" class="btn btn-primary my-2">Моя коллекция</a>
            </div>
        </div>
    </header>

    @yield('main_content')

    <footer class="text-muted py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="https://github.com/anb24">AnB.24</a>
            </p>
            <p class="mb-1">Frontend разработан с помощью © Bootstrap</p>
            <p class="mb-0">Backend разработан на © PHP Laravel</p>
        </div>
    </footer>
</body>
</html>
