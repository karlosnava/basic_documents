<div>
    <form wire:submit="login">
        <x-input wire:model="email" type="email" label="Correo" class="mb-4" :required="true" />
        <div class="text-red-500">
            @error('email')
                {{ $message }}
            @enderror
        </div>

        <x-input wire:model="password" type="password" label="Contraseña" :required="true" />
        <div class="text-red-500">
            @error('password')
                {{ $message }}
            @enderror
        </div>

        @if (session('message'))
            <div class="bg-orange-100 text-orange-500 rounded-md p-4 my-3">{{ session('message') }}</div>
        @endif

        <hr class="my-5">
        <x-button wire:loading.remove label="Iniciar sesión" />
        <x-button wire:loading label="Espera..." :disabled="true" />
    </form>
</div>
