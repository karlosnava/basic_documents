<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | {{ env('APP_NAME') }}</title>

    @vite('resources/css/app.css')
    @livewireStyles
    @yield('css')
</head>
<body class="bg-gray-100">
    @if (Auth::check())
        @include('partials.navbar')
    @endif

    @yield('content')

    @livewireScripts
    @yield('js')
</body>
</html>