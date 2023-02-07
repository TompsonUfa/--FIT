<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Школа фитнеса в Уфе | фитнес клуб Ө-FIT">
    <meta name="Keywords"
        content="Школа фитнеса,фитнес уфа,спорт обучение,обучение,тренер обучение, тренер, Школа фитнеса в Уфе, фитнес клуб Ө-FIT, фитнес клуб O-FIT, фитнес клуб О-FIT , фитнес клуб О ФИТ">
    <meta property="og:image" content="/images/about.jpg"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel='shortcut icon' type='image/x-icon' href='/favicon.ico' />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>@yield('title')</title>
</head>

<body>
    @yield('content')
</body>

</html>
