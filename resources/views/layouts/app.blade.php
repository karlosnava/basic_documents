<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | {{ env('APP_NAME') }}</title>
    
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    @vite('resources/css/app.css')
    @livewireStyles
    @stack('css')

    @stack('js_header')
</head>
<body class="bg-gray-100">
    @if (Auth::check())
        @include('partials.navbar')
    @endif

    @yield('content')

    @livewireScripts
    @stack('js')
</body>
</html>