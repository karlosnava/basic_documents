<nav class="bg-white px-10 py-2 shadow-md w-full">
    <div class="flex items-center justify-between">
        <div>
            <h1>{{ env('APP_NAME') }}</h1>
        </div>

        <div>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="text-red-400 hover:text-red-600">Cerrar sesión</button>
            </form>
        </div>
    </div>
</nav>