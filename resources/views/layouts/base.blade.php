<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="./public/styles/style.css" rel="stylesheet" type="text/css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-light bg-light">
            <a href="{{ route('index') }}"
               class="navbar-brand mr-auto ">Главная</a>
            <a href="{{ route('register') }}"
               class="nav-item nav-link ">Регистрация</a>
            <a href="{{ route('login') }}"
               class="nav-item nav-link">Вход</a>
            <a href="{{ route('home') }}"
               class="nav-item nav-link">Мои объявления</a>
            <form action="{{ route('logout') }}" method="POST"
                  class="form-inline">
                @csrf
                <input type="submit" class="btn btn-danger"
                       value="Выход">
            </form>
        </nav>


        <div class="main">
            <h1>Объявлене</h1>
            @yield('content')
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
