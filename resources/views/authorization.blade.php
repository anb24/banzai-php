@extends('layout')

@section('title')Авторизация@endsection

@section('main_content')
    <main class="form-signin w-50 m-auto">
        <form>
            <h1 class="h3 mb-3 fw-normal">Пожалуйста войдите</h1>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email адрес</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Пароль</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Запомнить меня
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Войти</button>
            <p class="mt-5 mb-3 text-muted">© 2023–2323</p>
        </form>
    </main>

@endsection
