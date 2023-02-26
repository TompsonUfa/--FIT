<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel='shortcut icon' type='image/x-icon' href='/favicon.ico' />
    @stack('scripts')
    <title>@yield('title')</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 col-xl-3 sidebar p-0">
                <div class="sidebar__logo">
                    <img src="/logo.png" alt="ШКОЛА ФИТНЕСА «Ө-FIT»">
                </div>
                <ul class="sidebar__nav nav">
                    <li class="nav__item {{ request()->is('admin/courses*') ? 'nav__item_active' : null }}">
                        <a href="{{ url('admin/courses') }}" class="nav__link">
                            Курсы
                        </a>
                    </li>
                    <li class="nav__item {{ request()->is('admin/posters*') ? 'nav__item_active' : null }}">
                        <a href="{{ url('admin/posters') }}" class="nav__link">
                            Афиши
                        </a>
                    </li>
                    <li class="nav__item {{ request()->is('admin/teachers*') ? 'nav__item_active' : null }}">
                        <a href="{{ url('admin/teachers') }}" class="nav__link">
                            ПРЕПОДАВАТЕЛИ
                        </a>
                    </li>
                    <li class="nav__item {{ request()->is('admin/employment*') ? 'nav__item_active' : null }}">
                        <a href="{{ url('admin/employment') }}" class="nav__link">
                            ТРУДОУСТРОЙСТВО
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
