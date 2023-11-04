@props([
    'name',
    'label',
    'required' => true,
])

<label>
    <div class="font-semibold">{{ $label }}</div>
    <select {{ $attributes }} name="{{ $name }}" id="{{ $name }}" class="bg-white border rounded-md px-5 py-2 w-full"
        @if ($required) required @endif>
        {{ $slot }}
    </select>
</label>
@error($name)
    <div class="text-red-500"><i class="fa-solid fa-circle-xmark"></i> {{ $message }}</div>
@enderror
