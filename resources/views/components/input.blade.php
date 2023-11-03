@props([
    'label',
    'type' => 'text',
    'name' => 'name',
    'class' => false,
    'required' => false,
])

<label>
    <div>{{ $label }}</div>
    <input {{ $attributes }} type="{{ $type }}" name="{{ $name }}" id="{{ $name }}"
        @if ($required) required @endif
        class="{{ $class }} border rounded-md px-5 py-2 w-full" />
</label>
