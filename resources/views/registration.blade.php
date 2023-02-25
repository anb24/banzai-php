@extends('layout')

@section('title')Регистрация@endsection

@section('main_content')
    <div class="row g-5 m-auto">

        <div class="col-md-7 col-lg-8 w-50 m-auto">
            <h4 class="mb-3">Регистрация</h4>

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $errors)
                            <li>{{ $errors }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="post" action="/reg/check" class="needs-validation" novalidate="">
                @csrf
                <div class="row g-3">
                    <div class="col-12">
                        <label for="firstName" class="form-label">Имя</label>
                        <input type="text" name="user_name" class="form-control" id="user_name" placeholder="Имя" value="" required="" wfd-id="id1">
                    </div>

                    <div class="col-12">
                        <label for="password" class="form-label">Пароль</label>
                        <input type="password" name="user_password" class="form-control" id="user_password" placeholder="Пароль" wfd-id="id4">
                    </div>

                    <div class="col-12">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Повторите пароль" wfd-id="id4">
                    </div>

                    <div class="col-12">
                        <label for="address2" class="form-label">E-mail</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="e-mail" wfd-id="id6">
                    </div>

                <hr class="my-4">

                <button class="w-100 btn btn-primary btn-lg" type="submit">Зарегистрироваться</button>
            </form>
        </div>
    </div>

@endsection
