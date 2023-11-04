<div>
    <div class="flex items-center justify-center mb-5">
        <img src="{{ asset('images/logo.png') }}" class="w-20">
        <h1 class="font-bold text-xl ml-3">{{ env('APP_NAME') }}</h1>
    </div>

    <form wire:submit="login">
        <x-input wire:model="email" type="email" label="Correo" class="mb-4" />
        @error('email')
            <div class="text-red-500 mt-1">
                <i class="fa-solid fa-circle-xmark"></i> {{ $message }}
            </div>
        @enderror

        <x-input wire:model="password" type="password" label="Contraseña" />
        @error('password')
            <div class="text-red-500 mt-1">
                <i class="fa-solid fa-circle-xmark"></i> {{ $message }}
            </div>
        @enderror

        @if (session('message'))
            <div class="bg-orange-100 text-orange-500 rounded-md p-4 my-3"><i class="fa-solid fa-triangle-exclamation"></i> {{ session('message') }}</div>
        @endif

        <hr class="my-5">
        <x-button wire:loading.remove icon="fa-solid fa-right-to-bracket" label="Iniciar sesión" />
        <x-button wire:loading icon="fa-solid fa-arrows-spin fa-spin" label="Espera..." :disabled="true" />
    </form>
</div>
