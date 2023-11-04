<nav class="bg-white py-4 shadow-md w-full">
    <div class="flex items-center justify-between w-11/12 mx-auto">
        <div class="flex flex-wrap items-center">
            <a href="{{ route('home') }}" class="flex items-center mr-5">
                <img src="{{ asset('images/logo.png') }}" class="w-10">
                <span class="font-bold ml-2">{{ env('APP_NAME') }}</span>
            </a>

            <div class="flex items-center md:ml-8 md:mt-0">
                <a href="{{ route('types.index') }}" class="{{ Request::routeIs('types.*') ? 'font-bold underline' : '' }} text-blue-500 hover:text-blue-700">Tipos de documentos</a>
                <a href="{{ route('processes.index') }}" class="{{ Request::routeIs('processes.*') ? 'font-bold underline' : '' }} text-blue-500 hover:text-blue-700 ml-4">Procesos</a>
            </div>
        </div>

        <div>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="text-red-400 hover:text-red-600 flex items-center">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span class="hidden md:block ml-1">Cerrar sesión</span>
                </button>
            </form>
        </div>
    </div>
</nav>