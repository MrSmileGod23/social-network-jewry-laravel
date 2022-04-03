<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Скрипты -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Шрифты -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

    <!-- Стили -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
        @include('inc.header')
        <main>
            @yield('content')
        </main>
        @include('inc.footer')

</body>
</html>
