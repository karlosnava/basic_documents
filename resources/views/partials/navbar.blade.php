<nav class="bg-white px-10 py-2 shadow-md w-full">
    <div class="flex items-center justify-between">
        <div class="flex items-center">
            <a href="{{ route('home') }}">{{ env('APP_NAME') }}</a>

            <div class="flex items-center ml-8">
                <a href="{{ route('types.index') }}" class="text-blue-500">Tipos de documentos</a>
                <a href="{{ route('processes.index') }}" class="text-blue-500 ml-4">Procesos</a>
            </div>
        </div>

        <div>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="text-red-400 hover:text-red-600">Cerrar sesión</button>
            </form>
        </div>
    </div>
</nav>