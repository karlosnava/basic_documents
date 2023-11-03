@props([
    'name',
    'label',
    'required' => true,
])

<label>
    <div>{{ $label }}</div>
    <select {{ $attributes }} name="{{ $name }}" id="{{ $name }}" class="w-full"
        @if ($required) required @endif>
        {{ $slot }}
    </select>
</label>
@error($name)
    <div class="text-red-500">{{ $message }}</div>
@enderror
