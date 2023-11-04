<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | {{ env('APP_NAME') }}</title>
    <link rel="shorcut icon" href="{{ asset('images/logo.png') }}">
    
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    @livewireStyles

    <script src="https://kit.fontawesome.com/263cabba08.js" crossorigin="anonymous"></script>
    @stack('js_header')
</head>
<body class="bg-gray-100 mb-10">
    @if (Auth::check())
        @include('partials.navbar')
        
        <div class="w-11/12 md:w-8/12 lg:w-5/12 mx-auto my-8">
            @if (session('message'))
                <div class="bg-green-500 text-white text-center shadow-md font-semibold rounded-md px-5 py-3 mb-5">
                    <i class="fa-solid fa-circle-check"></i> {{ session('message') }}
                </div>
            @endif
    
            @yield('content')
        </div>
    @else
        @yield('content')
    @endif
    
    <div class="text-center text-gray-400 text-xs">
        &copy {{ Carbon\Carbon::now()->format("Y") }} | Diseñado y desarrollado por Carlos Rodriguez
    </div>

    @livewireScripts
    @stack('js')
</body>
</html>
